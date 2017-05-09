<?php

namespace FadcoBundle\Controller\IndicateurPerformance;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DSCPerformanceController extends Controller
{
    //nombre de clients recus par canaux de communication facebook,whatsApp,Radio,television,prospectus
    private  function nbreClientByCanal($from,$to)
    {
        $canaux = array('facebook','whatsApp','Radio','télévision','prospectus');
     
        $em = $this->getDoctrine()->getManager()->getRepository('GSPBundle:Visiteurs');
        $series = array();
        
        for ($i = 0; $i < sizeof($canaux); $i++) {
            $series[] = array(
                'label' => $canaux[$i],
                'value' => sizeOf($em->visiteurByCanal($canaux[$i],\DateTime::createFromFormat('d/m/Y', $from),\DateTime::createFromFormat('d/m/Y', $to)))  
            );
                    
        }
       
                
       
        return $series;
    }

    //nombre de clients ayant visités
    public function nbreClientAyantVisite()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GSPBundle:FicheConcretisationVentes');
        $nb = $em->Visitecompteur();

        return $nb;
    }

    public function indexAction(Request $request)
    {
        $from = $request->query->get('from', date('d/m/Y'));
        $to = $request->query->get('to', date('d/m/Y'));

        $data = array();
        
        list($zones, $caracteristiques, $budgets) = $this->get('gsp.indicateur_performance')->nbrClientAttenteBiens();
        
        $data['nbvisitedclient'] = $this->nbreClientAyantVisite();

        $data['satisfactionChart'] = $this->get('gsp.chart_creator')->pie(
            "Satisfaction des clients après visite",
            $this->get('gsp.indicateur_performance')->satisfactionAccueil($from, $to)            
        );

         $data['canauxchart'] = $this->get('gsp.chart_creator')->plot(
            "Repartition des clients par les canaux de communication",
            "nombre de client(s)",
            $this->nbreClientByCanal($from,$to)
        );

        $data['nonbreNouveauVisiteur'] = $this->get('gsp.indicateur_performance')->countNouveauxClientsRecus();
        $data['nonbreAncienVisiteur'] = $this->get('gsp.indicateur_performance')->countAnciensClientsRecus();

        $data['caracteristiquesChart'] = $this->get('gsp.chart_creator')->plot(
            "Clients en attente de biens non encore diponibles par caractéristique",
            "Nombre de clients",
            $caracteristiques
        );

        $data['budgetsChart'] = $this->get('gsp.chart_creator')->plot(
            "Clients en attente de biens non encore diponibles par budget",
            "Nombre de clients",
            $budgets
        );

        $data['zonesChart'] = $this->get('gsp.chart_creator')->plot(
            "Clients en attente de biens non encore diponibles par zone",
            "Nombre de clients",
            $zones
        );

        $data['nbclientrecuproformat'] = $this::clientAyantRecuProformat($request);
        $data['chartClientRecuParDirection'] = $this::clientParDirection($request);

        return $this->render('GSPBundle:IndicateurPerformance:dsc.html.twig', $data);
    }

    public function nbrClientAttenteBiens()
    {
        $em = $this->getDoctrine()->getManager();

        $quartiers = $em->getRepository('GSPBundle:Quartier')->findAll();

        $countByZone = [];
        $caracteristiques = array();
        $budgets = array();
        $zones = array();
        $i = 0;

        foreach ($quartiers as $q)
        {
            $requetes = $em->createQuery("SELECT r,zr from GSPBundle:Requete r LEFT JOIN r.zoneRecherche zr
            WHERE r.etat NOT IN (3,4) and zr.codeQuartier = :zr GROUP BY r.id,zr.codeQuartier");            
            $requetes->setParameter('zr',$q->getCodeQuartier());
            if(count($requetes->getResult()) > 0)
            {
                $countByZone[$i] = $requetes->getResult();
                $quartier = $countByZone[$i][0]->getZoneRecherche()->getLibelle();
                $nbr = count($countByZone[$i][0]);
                $zones[] = array("label"=>$quartier,"value"=>$nbr);
                $i++;
            }
        }

        $requetesCaracteristique = $em->createQuery("SELECT COUNT(r.id) AS nbr, r.caracteristiques FROM GSPBundle:Requete r WHERE r.etat NOT IN (3,4) GROUP BY r.caracteristiques");

        $requetesBudget = $em->createQuery("SELECT COUNT(r.id) AS nbr, SUM(r.budgetMin) AS budgetMin, SUM(r.budgetMin) AS budgetMax, r.budgetMax, r.budgetMax FROM GSPBundle:Requete r WHERE r.etat NOT IN (3,4) GROUP BY r.budgetMin, r.budgetMax");

        $resultsCaracteristique = $requetesCaracteristique->getResult();
        $resultsBudget = $requetesBudget->getResult();
        
        foreach ($resultsCaracteristique as $r)
        {
            $caracteristiques[] = array("label"=>$r['caracteristiques'],"value"=>$r['nbr']);
        }
        
        foreach ($resultsBudget as $b)
        {
            $budgets[] = array("label"=>$b['budgetMin'],"value"=>$b['nbr']);
        }

        return array(
            'zones' => $zones,
            'caracteristiques' => $caracteristiques,
            'budgets' => $budgets
        );
    }

    public function clientAyantRecuProformat(Request $request) {
        $em = $this->getDoctrine()->getManager(); 

        $from = $request->get('from', date('d/m/Y'));
        $to = $request->get('to', date('d/m/Y'));

                           
        $dateDebut = \DateTime::createFromFormat('d/m/Y', $from);
        $dateFin = \DateTime::createFromFormat('d/m/Y', $to);

        $debut = $dateDebut->format('Y-m-d 00:00:00');
        $fin_1M = $dateFin->format('Y-m-d 23:59:59');


        $clientQuery = "SELECT c client, count(c.id) nbfois FROM GSPBundle:ProFormat p JOIN GSPBundle:Visiteurs c WHERE p.client = c.id AND p.date BETWEEN '$debut' AND '$fin_1M'";
                    
        $clientQuery .= " GROUP BY c.id";
                    
        $clients = $em->createQuery($clientQuery)->getResult();

        return count($clients);

    }

    public function clientParDirection(Request $request) {
    //    $em = $this->getDoctrine()->getManager(); 

    //     $from = $request->get('from', date('d/m/Y'));
    //     $to = $request->get('to', date('d/m/Y'));

                           
    //     $dateDebut = \DateTime::createFromFormat('d/m/Y', $from);
    //     $dateFin = \DateTime::createFromFormat('d/m/Y', $to);

    //     $debut = $dateDebut->format('Y-m-d 00:00:00');
    //     $fin_1M = $dateFin->format('Y-m-d 23:59:59');
    //     $directions = $em->getRepository('GSPBundle:Direction')->findAll();
        

    //     $data = array();

    //     $baseClientQuery = "SELECT c client, count(c.id) FROM GSPBundle:Accueil a JOIN GSPBundle:Visiteurs c WHERE a.client = c.id AND a.date BETWEEN '$debut' AND '$fin_1M'";                   


    //     foreach ($directions as $direction) {
    //         $clientQuery = $baseClientQuery." AND a.direction =" . $direction->getIdDir() ." GROUP BY c.id";                        
    //         $clients = $em->createQuery($clientQuery)->getResult();         
    //         $data[] = array('label'=>$direction->getCodeDir(), 'value' => count($clients));          
    //     }

    //     $chartClientRecuParDirection = $this->get('gsp.chart_creator')->plot(
    //     	"Clients reçus par direction", "Nombre de clients reçus", $data);
        
        $chartClientRecuParDirection = $this->get('gsp.chart_creator')->plot(
        	"Clients reçus par direction", 
            "Nombre de clients reçus", 
            $this->get('gsp.indicateur_performance')->clientsRecusParDirection()
        );
            

        return $chartClientRecuParDirection;
    }
}
