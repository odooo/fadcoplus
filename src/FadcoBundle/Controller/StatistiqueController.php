<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StatistiqueController extends Controller
{
    public function indexAction()
    {
        return $this->render('FadcoBundle:Statistique:index.html.twig', array());    
    }

    public function nbrAbonneByFormuleAction(Request $request, $startDate, $endDate)
    {
        $em = $this->getDoctrine()->getManager();

        $startDate = \DateTime::createFromFormat('d/m/Y', $startDate);
        $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);

        $startDate = $startDate->format('Y-m-d 00:00:00');
        $endDate = $endDate->format('Y-m-d 23:59:59');

        $requetesAbonne = $em->createQuery("SELECT COUNT(r.id) AS nbr, r.formule FROM FadcoBundle:Reabonnement r 
        WHERE r.date >= :startDate AND r.date <= :endDate GROUP BY r.formule");
        $requetesAbonne->setParameters(array('startDate' => $startDate,'endDate' => $endDate));
        $resultsAbonne = $requetesAbonne->getResult();

        $colors = array('ion ion-ios-gear-outline', 'fa fa-google-plus', 'ion ion-ios-cart-outline');
        if($resultsAbonne)
        {
            foreach ($resultsAbonne as $r)
            {
                $abonnes[] = array("label"=>$r['formule'], "abonne" => '',"value"=>$r['nbr'], 'colors' => $colors);
            }
        }
        else
        {
            $array = array('ACCESS', 'ACCESS+', 'EVASION', 'EVASION+', 'TOUT CANAL');
            foreach ($array as $formule)
            {
                $abonnes[] = array("label"=>"$formule", "abonne" => "","value"=>0, 'colors' => $colors);
            }
        }

        return $this->render('FadcoBundle:Statistique:count.html.twig', array(
            'entities' => $abonnes
        )); 
    }

    public function venteTotalByDistributeurAndPeriodAction(Request $request, $startDate, $endDate, $type, $nom = null, $prenom = null)
    {
        $em = $this->getDoctrine()->getManager();

        $distributeurs = $em->getRepository('FadcoBundle:Prestataire')->findBy(array(
            'type' => 'distributeur'
        ));

         $distributeur = $em->getRepository('FadcoBundle:Prestataire')->findBy(array(
            'nom' => $nom,
            'prenom' => $prenom
        ));

        $startDate = \DateTime::createFromFormat('d/m/Y', $startDate);
        $endDate = \DateTime::createFromFormat('d/m/Y', $endDate);

        $startDate = $startDate->format('Y-m-d 00:00:00');
        $endDate = $endDate->format('Y-m-d 23:59:59');

        $sql = "";
        $param = array();

        $byDate = false;
        $byDistr = false;

        if($startDate && $endDate)
        {
            $sql1 = "SELECT SUM(r.montant) AS Total1, r.abonne, d.nom, d.prenom, r.date FROM FadcoBundle:Reabonnement r 
            LEFT JOIN r.distributeur d WHERE r.date >= :startDate AND r.date <= :endDate GROUP BY d.nom";
            
            $sql2 = "SELECT SUM(c.montant) AS Total2, c.abonne, d.nom, d.prenom, c.date FROM FadcoBundle:Complement c 
            LEFT JOIN c.distributeur d WHERE c.date >= :startDate AND c.date <= :endDate GROUP BY d.nom";

            $param = array('startDate' => $startDate,'endDate' => $endDate);

            $byDate = true;
        }

        if($nom && $prenom)
        {
            $sql1 = "SELECT SUM(r.montant) AS Total1, d.prenom, r.date, d.nom FROM FadcoBundle:Reabonnement r 
            LEFT JOIN r.distributeur d WHERE r.date >= :startDate AND r.date <= :endDate AND d.nom LIKE :nom AND d.prenom LIKE :prenom GROUP BY d.nom ";
            
            $sql2 = "SELECT SUM(c.montant) AS Total2, d.prenom, c.date, d.nom FROM FadcoBundle:Complement c 
            LEFT JOIN c.distributeur d WHERE c.date >= :startDate AND c.date <= :endDate AND d.nom LIKE :nom AND d.prenom LIKE :prenom GROUP BY d.nom ";

            $param = array('startDate' => $startDate, 'endDate' => $endDate, 'nom' => '%'.$nom.'%', 'prenom' => '%'.$prenom.'%');

            $byDistr = true;
        }

        if($sql1 != "")
        {
            $requetesVenteTotal1 = $em->createQuery($sql1);
            $requetesVenteTotal2 = $em->createQuery($sql2);
            $requetesVenteTotal1->setParameters($param);
            $requetesVenteTotal2->setParameters($param);
            $resultsVenteTotal1 = $requetesVenteTotal1->getResult();
            $resultsVenteTotal2 = $requetesVenteTotal2->getResult();
            
            $resultsVenteTotal = array();
            $i = 0;

            foreach ($resultsVenteTotal1 as $value) {
                $resultsVenteTotal[$i] = $value;
                $i++;
            }
            foreach ($resultsVenteTotal2 as $value) {
                $resultsVenteTotal[$i] = $value;
                $i++;
            }

        }
        else
        {
            $resultsVenteTotal = null;
        }

        //die(var_dump($resultsVenteTotal));

        return $this->render('FadcoBundle:Statistique:count.html.twig', array(
            'entities' => $resultsVenteTotal,
            'type' => $type,
            'distributeurs' => $distributeurs,
            'distributeur' => $distributeur,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'byDate' => $byDate,
            'byDistr' => $byDistr,
            'nom' => $nom,
            'prenom' => $prenom,
        )); 
    }
}
