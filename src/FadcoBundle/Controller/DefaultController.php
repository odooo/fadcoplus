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
        return $this->render('FadcoBundle:Default:dashbord.html.twig');
    }
}

