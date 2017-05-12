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

    public function venteTotalByDistributeurAndPeriodAction(Request $request, $startDate, $endDate, $type, $nom = "", $prenom = "")
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

        $sql = "";
        $param = array();

        $byDate = false;
        $byDistr = false;

        if($startDate && $endDate)
        {
            $sql = "SELECT SUM(r.montant) AS Total, r.abonne, d.nom, d.prenom, r.date FROM FadcoBundle:Reabonnement r 
            LEFT JOIN r.distributeur d WHERE
            r.date >= :startDate AND r.date <= :endDate GROUP BY r.date, r.abonne, d.nom, d.prenom";

            $param = array('startDate' => $startDate,'endDate' => $endDate);

            $byDate = true;
        }

        if($nom && $prenom)
        {
            $sql = "SELECT SUM(r.montant) AS Total, d.nom FROM FadcoBundle:Reabonnement r 
            LEFT JOIN r.distributeur d WHERE d.nom LIKE :nom AND d.prenom LIKE :prenom GROUP BY d.nom";

            $param = array('nom' => '%'.$nom.'%', 'prenom' => '%'.$prenom.'%');

            $byDistr = true;
        }

        if($sql != "")
        {
            $requetesVenteTotal = $em->createQuery($sql);
            $requetesVenteTotal->setParameters($param);
            $resultsVenteTotal = $requetesVenteTotal->getResult();
        }
        else
        {
            $resultsVenteTotal = null;
        }

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
