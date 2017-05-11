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
        //var_dump($this->getUser()->getType());
        //die();
        //return $this->render('FadcoBundle:Default:dashbord.html.twig');
        
        if($this->getUser()->getType() == "distributeur"){
            return $this->render('FadcoBundle:Distributeur:index.html.twig');
        }

        if($this->getUser()->getType() == "admin"){
            return $this->render('FadcoBundle:Default:dashbord.html.twig');
        }

    }
}

