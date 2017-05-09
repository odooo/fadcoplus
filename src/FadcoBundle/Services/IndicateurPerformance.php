<?php

namespace GSPBundle\Services;

use Doctrine\Common\Persistence\ObjectManager;

use DateTime;
use GSPBundle\Entity\ProFormat;
use GSPBundle\Entity\Constant\SatisfactionAccueil;

class IndicateurPerformance
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    private $em;

    private $dateFrom;

    private $dateTo;

    public function __construct(ObjectManager $entityManager, $requestStack)
    {        
        $this->em = $entityManager;
        
        $request = $requestStack->getCurrentRequest();
        if ($request) {
            $this->dateFrom = $request->query->get('from', date('d/m/Y'));
            $this->dateTo = $request->query->get('to', date('d/m/Y'));
        } else {
            $this->dateFrom = date('d/m/Y');
            $this->dateTo = date('d/m/Y');
        }
    }

    public function countNouveauxClientsRecus()
    {
        $tabNouveauclient = $this->em->getRepository('GSPBundle:Accueil')->getNouveauClient($this->dateFrom, $this->dateTo);
        // $data['nbreNouveauClt']=count($tabNouveauclient);
        // $data['clientsNouveauRecus']= $tabNouveauclient;
        return count($tabNouveauclient);
    }

    public function countAnciensClientsRecus()
    {
        $tabAncienclient = $this->em->getRepository('GSPBundle:Accueil')->getAncienClient($this->dateFrom, $this->dateTo);
        // $data['nbreAncienClt']=count($tabAncienclient);
        // $data['clientsAncienRecus']= $tabAncienclient;
        return count($tabAncienclient);
    }

    public function countBienProvisoire()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Bien)')
            ->from('GSPBundle:Bien', 'Bien')
            ->where('Bien.valide = 0')
        ;

        $this->addPeriodeCriteria($qb, 'Bien', 'dateCreation');

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countBienStrategique()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Bien)')
            ->from('GSPBundle:Bien', 'Bien')
            ->where("Bien.typePriseEnCharge = 'strategique'")
        ;

        $this->addPeriodeCriteria($qb, 'Bien', 'dateCreation');

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countRequeteBienPriseEnCharge()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Requete)')
            ->from('GSPBundle:Requete', 'Requete')
            ->innerJoin('Requete.modeTraitement', 'ModeTraitement', 'WITH', 'ModeTraitement.libelle LIKE :mode')
            ->where('Requete.etat = 2')
            ->setParameter('mode', 'Prise en charge')
        ;

        $this->addPeriodeCriteria($qb, 'Requete', 'datetraitement');
        
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countProformat()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Client)')
            ->from('GSPBundle:ProFormat', 'ProFormat')
            ->innerJoin('GSPBundle:Visiteurs', 'Client')
        ;

        $this->addPeriodeCriteria($qb, 'ProFormat', 'date');
        
        return $qb->getQuery()->getSingleScalarResult();
    }

    public function countClientAyantVisite()
    {
        return $this->em->getRepository('GSPBundle:FicheConcretisationVentes')->Visitecompteur();
    }

    public function nbreBiensValides()
    {
        $em = $this->em->getRepository('GSPBundle:Bien');
        $nbre = sizeOf($em->bienValides(\DateTime::createFromFormat('d/m/Y', $this->dateFrom), \DateTime::createFromFormat('d/m/Y', $this->dateTo)));

        return $nbre;
    }

    public function getNbreContratSignes()
    {
        $em = $this->em;
        $contratSignes = $em->getRepository('GSPBundle:Bien')->getNombreContractSigne($this->dateFrom, $this->dateTo);
        return count($contratSignes);
    }

    public function countClientByCanal()
    {
        $canaux = array('facebook', 'whatsApp', 'Radio', 'télévision', 'prospectus');
     
        $em = $this->em->getRepository('GSPBundle:Visiteurs');
        $series = array();
        
        for ($i = 0; $i < sizeof($canaux); $i++) {
            $series[] = array(
                'label' => $canaux[$i],
                'value' => sizeOf($em->visiteurByCanal($canaux[$i],\DateTime::createFromFormat('d/m/Y', $this->dateFrom), \DateTime::createFromFormat('d/m/Y', $this->dateTo)))  
            );                    
        }
       
        return $series;
    }

    public function satisfactionAccueil()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Accueil.satisfaction) as nb, Accueil.satisfaction')
            ->from('GSPBundle:Accueil', 'Accueil')
            ->where('Accueil.satisfaction IS NOT NULL')
            ->groupBy('Accueil.satisfaction')
        ;

        $this->addPeriodeCriteria($qb, 'Accueil');        

        $result = $qb->getQuery()->getScalarResult();

        return array_map(function($item) {
            return array(
                'label' => satisfactionAccueil::MAP[$item['satisfaction']],
                'value' => $item['nb'],
            );
        }, $result);
    }    

    public function clientParDirection(Request $request) 
    {
        $em = $this->em;
                           
        $dateDebut = \DateTime::createFromFormat('d/m/Y', $this->dateFrom);
        $dateFin = \DateTime::createFromFormat('d/m/Y', $this->dateTo);

        $debut = $dateDebut->format('Y-m-d 00:00:00');
        $fin_1M = $dateFin->format('Y-m-d 23:59:59');
        $directions = $em->getRepository('GSPBundle:Direction')->findAll();
        

        $data = array();

        $baseClientQuery = "SELECT c client, count(c.id) FROM GSPBundle:Accueil a JOIN GSPBundle:Visiteurs c WHERE a.client = c.id AND a.date BETWEEN '$debut' AND '$fin_1M'";                   


        foreach ($directions as $direction) {
            $clientQuery = $baseClientQuery." AND a.direction =" . $direction->getIdDir() ." GROUP BY c.id";                        
            $clients = $em->createQuery($clientQuery)->getResult();         
            $data[] = array('label'=>$direction->getCodeDir(), 'value' => count($clients));          
        }

        $chartClientRecuParDirection = $this->get('gsp.chart_creator')->plot(
        	"Clients reçus par direction", "Nombre de clients reçus", $data);
            

        return $chartClientRecuParDirection;
    }

    public function nbreDossierJuristeBoucle() 
    {
        $em = $this->em->getRepository('GSPBundle:DossierTitrePropriete');
        $nbre = sizeOf($em->dossierTitrePropriete(\DateTime::createFromFormat('d/m/Y', $this->dateFrom), \DateTime::createFromFormat('d/m/Y', $this->dateTo)));

        return $nbre;
    }

    public function nbreClientPlaqueEtBorne()
    {
        $em = $this->em->getRepository('GSPBundle:DevisServiceApresVente');
        $nbre = sizeOf($em->nbreClientPlaqueEtBorne(\DateTime::createFromFormat('d/m/Y', $this->dateFrom), \DateTime::createFromFormat('d/m/Y', $this->dateTo)));

        return $nbre;
    }

    public function nbrClientIndisponible()
    {
        $em = $this->em;

        $startDate = \DateTime::createFromFormat('d/m/Y', $this->dateFrom);
        $endDate = \DateTime::createFromFormat('d/m/Y', $this->dateTo);

        $clientsIndispo = $em->createQuery("SELECT COUNT(d.id) AS nbr FROM GSPBundle:DossierTitrePropriete d LEFT JOIN d.retraitTritre r
        WHERE r.disponibilite = 0 AND r.dateRDV >= :startDate AND r.dateRDV <= :endDate");

        $clientsIndispo->setParameters(array('startDate' => $startDate,'endDate' => $endDate));

        $clientsIndispo = $clientsIndispo->getResult();

        return $clientsIndispo[0]['nbr'];
    }

    public function nbrClientDisponible()
    {
        $em = $this->em;

        $startDate = \DateTime::createFromFormat('d/m/Y', $this->dateFrom);
        $endDate = \DateTime::createFromFormat('d/m/Y', $this->dateTo);

        $clientsDispo = $em->createQuery("SELECT COUNT(d.id) AS nbr FROM GSPBundle:DossierTitrePropriete d LEFT JOIN d.retraitTritre r
        WHERE r.disponibilite = 1 AND r.dateRDV >= :startDate AND r.dateRDV <= :endDate");

        $clientsDispo->setParameters(array('startDate' => $startDate,'endDate' => $endDate));

        $clientsDispo = $clientsDispo->getResult();

        return $clientsDispo[0]['nbr'];
    }

    public function nbrClientAyantRetire()
    {
        $em = $this->em;

        $startDate = \DateTime::createFromFormat('d/m/Y', $this->dateFrom);
        $endDate = \DateTime::createFromFormat('d/m/Y', $this->dateTo);

        $nbrClientAyantRetire = $em->createQuery("SELECT COUNT(d.id) AS nbr FROM GSPBundle:DossierTitrePropriete d LEFT JOIN d.retraitTritre r
        WHERE r.retirer = 'non' AND r.dateRDV >= :startDate AND r.dateRDV <= :endDate");

        $nbrClientAyantRetire->setParameters(array('startDate' => $startDate,'endDate' => $endDate));

        $nbrClientAyantRetire = $nbrClientAyantRetire->getResult();

        return $nbrClientAyantRetire[0]['nbr'];
    }

    public function getVisiteBorne()
    {
        $em = $this->em;
        $ClientVisitBorne = $em->getRepository('GSPBundle:DossierTitrePropriete')->getVisiteBorne($this->dateFrom, $this->dateTo);
        $nbre = count($ClientVisitBorne);
        return $nbre;

    }

    public function getVisiteAttenteBorne()
    {
        $em = $this->em;
        $ClientVisitBorne = $em->getRepository('GSPBundle:DossierTitrePropriete')->getVisiteBorne($this->dateFrom, $this->dateTo);
        $nbre = count($ClientVisitBorne);
        return $nbre;
    }

    public function nbreDossiersRecusTraitement()
    {
        $em = $this->em->getRepository('GSPBundle:JuristeProformat');
        $nb = $em->dossiersRecusTraitementCompteur();

        return $nb;
    }

    public function nbreDossiersRetournesCorrection()
    {
        $em = $this->em;
        $allDossiers = $em->getRepository('GSPBundle:JuristeProformat')->findAll();

        $dossiers = array();
        $cpt = 0;

        foreach ($allDossiers as $value) {
            if($value->getProformatDossierInit()){
                if(!is_null($value->getProformatDossierInit()->getChecker())) $cpt++;
            }
        }

        foreach ($allDossiers as $value) {
            if($value->getProformatDossierEnd()){
                if(!is_null($value->getProformatDossierEnd()->getChecker())) $cpt++;
            }
        }

        return $cpt;
    }

    public function nbreDossiersLiberesDelais()
    {
        $em = $this->em;
        $allDossiers = $em->getRepository('GSPBundle:JuristeProformat')->findAll();

        $nb = 0;

        foreach ($allDossiers as $value) {
            if($value->getProformatDossierInit()){   
                if($value->getProformatDossierInit()->getStatusDossierTitre() == ProFormat::DOSSIER_STATUS_ENVOYER) $nb++;
            }
        }

        foreach ($allDossiers as $value) {
            if($value->getProformatDossierEnd()){ 
                if($value->getProformatDossierEnd()->getStatusDossierTitre() == ProFormat::DOSSIER_STATUS_ENVOYER) $nb++;
            }
        }

        return $nb;
    }

    public function nbreDossiersEnSoufrance()
    {
        $em = $this->em;
        $allResultatGlobaNT = $em->getRepository('GSPBundle:ResultatGlobal')->getResultatGEnSouffrance();
        $allResultatProgressifNT = $em->getRepository('GSPBundle:ResultatProgressif')->getResultatPEnSouffrance();

        $dossiers = array();
        $dateDuJour = new DateTime();

        foreach ($allResultatGlobaNT as $resultatGlobal) {
            $dos = $em->getRepository('GSPBundle:DossierExterne')->findOneBy(array('resultatGlobal'=>$resultatGlobal));
            if(!is_null($dos)){
                $dateIntro = $dos->getDateIntroDossier();
                $dif = $dateDuJour - $dateIntro ;
                if($dif > 31){
                    $dossiers[]=$dos;
                }
            }


        }
        foreach ($allResultatProgressifNT as $resultatProgressif) {
            $dos = $em->getRepository('GSPBundle:DossierExterne')->findOneBy(array('resultatProgressif'=>$resultatProgressif));
            if(!is_null($dos)){
                $dateIntro = $dos->getDateIntroDossier();
                $dif = $dateDuJour - $dateIntro ;
                if($dif > 31){
                    $dossiers[]=$dos;
                }
            }
        }
        $nbreData= count($dossiers);
        return $nbreData;
    }

    public function clientsRecusParDirection()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('COUNT(Client) as nb, Direction.code_dir as direction')
            ->from('GSPBundle:Accueil', 'Accueil')
            ->leftJoin('Accueil.client', 'Client')
            ->leftJoin('Accueil.direction', 'Direction')
            ->groupBy('Direction.code_dir')
        ;

        $this->addPeriodeCriteria($qb, 'Accueil');        

        $result = $qb->getQuery()->getScalarResult();

        return array_map(function($item) {
            return array(
                'label' => $item['direction'],
                'value' => $item['nb'],
            );
        }, $result);
    }

    public function nbrClientAttenteBiens()
    {
        $em = $this->em;

        $zoneQb = $em->createQueryBuilder()
            ->select('COUNT(Requete) as nb, Zone.libelle ')
            ->from('GSPBundle:Requete', 'Requete')
            ->leftJoin('Requete.zoneRecherche', 'Zone')
            ->where('Requete.etat NOT IN (3, 4)')
            ->groupBy('Zone.codeQuartier')
        ;

        $this->addPeriodeCriteria($zoneQb, 'Requete', 'datetraitement');

        $result = $zoneQb->getQuery()->getScalarResult();
        $zones =  array_map(function($item) {
            return array(
                'label' => $item['libelle'],
                'value' => $item['nb'],
            );
        }, $result);

        $caracteristiqueQb = $em->createQueryBuilder()
            ->select('COUNT(Requete) as nb, Requete.caracteristiques')
            ->from('GSPBundle:Requete', 'Requete')
            ->where('Requete.etat NOT IN (3, 4)')
            ->groupBy('Requete.caracteristiques')
        ;

        $this->addPeriodeCriteria($caracteristiqueQb, 'Requete', 'datetraitement');

        $result = $caracteristiqueQb->getQuery()->getScalarResult();
        $caracteristiques =  array_map(function($item) {
            return array(
                'label' => $item['caracteristiques'],
                'value' => $item['nb'],
            );
        }, $result);


        $budgetQb = $em->createQueryBuilder()
            ->select('COUNT(Requete) as nb, Requete.budgetMin')
            ->from('GSPBundle:Requete', 'Requete')
            ->where('Requete.etat NOT IN (3, 4)')
            ->groupBy('Requete.budgetMin')
        ;  

        $this->addPeriodeCriteria($budgetQb, 'Requete', 'datetraitement');

        $result = $budgetQb->getQuery()->getScalarResult();
        $budgets =  array_map(function($item) {
            return array(
                'label' => $item['budgetMin'],
                'value' => $item['nb'],
            );
        }, $result);  

        // $requetesBudget = $em->createQuery("SELECT COUNT(r.id) AS nbr, SUM(r.budgetMin) AS budgetMin, SUM(r.budgetMin) AS budgetMax, r.budgetMax, r.budgetMax FROM GSPBundle:Requete r WHERE r.etat NOT IN (3,4) GROUP BY r.budgetMin, r.budgetMax");

        return array(
            $zones,
            $caracteristiques,
            $budgets
        );
    }

    private function addPeriodeCriteria($qb, $alias, $dateAttribute = 'date')
    {
        if ($this->dateFrom == $this->dateTo) {
            $qb->andWhere(sprintf("DATE(%s.%s) = :date", $alias, $dateAttribute));            
            $qb->setParameter('date', $this->formatDate($this->dateFrom));
        } else {
            $qb->andWhere(sprintf("DATE(%s.%s) BETWEEN :dateFrom AND :dateTo", $alias, $dateAttribute));
            $qb->setParameter('dateFrom', $this->formatDate($this->dateFrom));
            $qb->setParameter('dateTo', $this->formatDate($this->dateTo));
        }
    }

    private function formatDate($date)
    {
        if (!($date instanceof \DateTime)) {
            $date = \DateTime::createFromFormat('d/m/Y', $date);            
        }

        return $date->format('Y-m-d');
    }
}
