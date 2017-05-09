<?php

namespace GSPBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GSPBundle\Entity\Prestataire;
use Symfony\Component\HttpFoundation\Response;

/**
 * Accueil controller.
 *
 */
class GestionDesRolesController extends Controller
{
    function addAction(Request $Request,$id,$role)
    {    
         $em = $this->getDoctrine()->getManager();
         $prestataire = $em->getRepository('GSPBundle:Prestataire')->find($id);
         $roles=$prestataire->getRoles();
         array_push($roles,$role);
         $prestataire->setRoles($roles);
         $em->flush();
    }
    
}
