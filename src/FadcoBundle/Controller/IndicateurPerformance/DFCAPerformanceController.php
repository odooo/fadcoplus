<?php

namespace FadcoBundle\Controller\IndicateurPerformance;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DFCAPerformanceController extends Controller
{
    //chiffre total frais de formalites
    public function chiffreTotalFraisFormalites($dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:DevisFormalites')->getChiffre($dd, $df);

        $chiffre = 0;

        foreach ($devis as $value) {
            $chiffre = $chiffre + $value->getTotal();
        }

        return $chiffre;
    }
    
    //chiffre total des nouvelles ventes
    public function chiffreTotalNouvellesVentes($dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:OperationVente')->getChiffreCash( $dd, $df);

        $chiffre = 0;

        foreach ($devis as $value) {
            $chiffre = $chiffre + $value->getMontant();
        }

        return $chiffre;
    }
    
    
    //chiffre total des mensualite credit
    public function chiffreTotalDesMensualitesCredit($dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:OperationVente')->getChiffreCredit( $dd, $df);

        $chiffre = 0;

        foreach ($devis as $value) {
            $chiffre = $chiffre + $value->getMontant();
        }

        return $chiffre;
    }
    
    //chiffre total des investissement en pisci 
    public function chiffreTotalDesInvestPisciculture($param, $dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:AutresRecettes')->getChiffre($param, $dd, $df);
        $chiffre = 0;

        foreach ($devis as $value) {
            $chiffre = $chiffre + $value->getMontant();
        }

        return $chiffre;
    }
    
    //chiffre total des investissement en pisci 
    public function chiffreTotalDesCharges($dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:ChargeFixe')->getChiffre($dd, $df);
        return $devis;
    }
    
    //chiffre total des investissement en pisci 
    public function chiffreTotalDesChargesAttentes($dd, $df)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('GSPBundle:ChargeFixe')->getChiffreAttente($dd, $df);
        return $devis;
    }

    public function indexAction(Request $request)
    {
        $from = $request->get('from', date('d/m/Y'));
        $to = $request->get('to', date('d/m/Y'));
                           
        $ddi = \DateTime::createFromFormat('d/m/Y', $from);
        $dfi = \DateTime::createFromFormat('d/m/Y', $to);
        
        $dd = $ddi->format('Y-m-d 00:00:00');
        $df = $dfi->format('Y-m-d 23:59:59');
       
        return $this->render('GSPBundle:IndicateurPerformance:dfca.html.twig', array(
            'chiffretotalfraisformalites'=> $this->chiffreTotalFraisFormalites($dd, $df),
            'chiffretotaldesnouvellesventes' => $this->chiffreTotalNouvellesVentes($dd, $df),
            'chiffretotaldesmensualitescredit' => $this->chiffreTotalDesMensualitesCredit($dd, $df),
            'chiffretotaldesinvestissementpisciculture'=> $this->chiffreTotalDesInvestPisciculture("Pisciculture",$dd, $df),
            'chiffretotaldesinvestissementpiscicultureAutre'=> $this->chiffreTotalDesInvestPisciculture("Autres",$dd, $df),
            'charges'=> $this->chiffreTotalDesCharges($dd, $df),
            'chargesAttentes'=> $this->chiffreTotalDesChargesAttentes($dd, $df)
        ));
    }
}
