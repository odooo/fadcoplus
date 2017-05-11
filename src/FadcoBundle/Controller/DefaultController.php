<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{	
	public function indexAction($name)
    {
        return $this->render('FadcoBundle:Default:index.html.twig', array('name' => $name));
    }

	public function dashbordAction()
    {
        //return $this->render('FadcoBundle:Default:dashbord.html.twig');
        
        if($this->container->get('security.context')->isGranted('ROLE_DISTRIBUTEUR')){
            return $this->render('FadcoBundle:Distributeur:index.html.twig');
        }

        if($this->container->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('FadcoBundle:Distributeur/Repair:index.html.twig');
        }

    }
}

