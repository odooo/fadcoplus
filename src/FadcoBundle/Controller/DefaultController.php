<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{	
	public function indexAction($name)
    {
        return $this->render('FadcoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function nbreReabonnementDirect($dd, $df) 
    {
        
        $em = $this->getDoctrine()->getManager();
        $nbre = 0;

        $reabos = $em->getRepository('FadcoBundle:Reabonnement')->getNombre($dd, $df);

        if($this->getUser()->getType() == "distributeur"){
            foreach ($reabos as $value) {
                if($value->getDistributeur() == $this->getUser()) $nbre++;
            }
        }else{
            $nbre = count($reabos);
        }

        return $nbre;
    }

    public function nbrePrestation($dd, $df) 
    {
        
        $em = $this->getDoctrine()->getManager();
        $nbre = 0;

        $repairs = $em->getRepository('FadcoBundle:Repair')->getNombre($dd, $df);

        if($this->getUser()->getType() == "distributeur"){
            foreach ($repairs as $value) {
                if($value->getDistributeur() == $this->getUser()) $nbre++;
            }
        }else{
            $nbre = count($repairs);
        }

        return $nbre;
    }

	public function dashbordAction(Request $request)
    {

        if($this->getUser()->getType() == "distributeur"){

            $from = $request->query->get('from', date('d/m/Y'));
            $to = $request->query->get('to', date('d/m/Y'));

            $ddi = \DateTime::createFromFormat('d/m/Y', $from);
            $dfi = \DateTime::createFromFormat('d/m/Y', $to);
            
            $dd = $ddi->format('Y-m-d 00:00:00');
            $df = $dfi->format('Y-m-d 23:59:59');

            $data = array();
            
            $data['nbrereabonnementdirect'] = $this->nbreReabonnementDirect($dd, $df);
            $data['nbreprestation'] = $this->nbrePrestation($dd, $df);
        
            return $this->render('FadcoBundle:Distributeur:index.html.twig', $data);
        }

        if($this->getUser()->getType() == "admin"){

            $from = $request->query->get('from', date('d/m/Y'));
            $to = $request->query->get('to', date('d/m/Y'));

            $ddi = \DateTime::createFromFormat('d/m/Y', $from);
            $dfi = \DateTime::createFromFormat('d/m/Y', $to);
            
            $dd = $ddi->format('Y-m-d 00:00:00');
            $df = $dfi->format('Y-m-d 23:59:59');

            $data = array();
            
            $data['nbrereabonnementdirect'] = $this->nbreReabonnementDirect($dd, $df);
            $data['nbreprestation'] = $this->nbrePrestation($dd, $df);

            //return $this->redirect($this->generateUrl('main_page_distributeur'));
            return $this->render('FadcoBundle:Prestataire:main-page.html.twig', array('data' => $data));
        }

    }
}

