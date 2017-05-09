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
	public function venteAction()
    {
//      if($this->container->get('security.context')->isGranted('ROLE_VENTE'))
//              {
                    return $this->render('FadcoBundle:Default:menu.html.twig');   
//              }
//              else
//              throw new AccessDeniedException('Vous navez pas Accès a ce Module.');
        
    }

    public function assistanceJuridiqueAction()
    {
		return $this->render('FadcoBundle:Default:menu.html.twig');	  
	}

	public function grhAction()
    {
			
        // if($this->container->get('security.context')->isGranted('ROLE_GRH'))
				//{   	
				//}
				//else
				//throw new AccessDeniedException('Vous navez pas Accès a ce Module.');	
    
        $usertype = $this->container->get('security.context')->getToken()->getUser()->getTypeprestataire();
        $userid = $this->container->get('security.context')->getToken()->getUser()->getId();
        
        if($usertype=='DG')
         {  
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('FadcoBundle:Prestataire')->findAll();

            return $this->render('FadcoBundle:BonDeCommande:index_dg.html.twig', array(
            'entities' => $entities,
            ));
         }
         elseif ($usertype=='Directeur') 
         {  
              
            $cnn = $this->container->get('doctrine')->getEntityManager()->getConnection();
            $results=$cnn->fetchAll("select * from infoprestataire where typeprestataire='Simple' and id_directeur=".$userid);
            return $this->render('FadcoBundle:BonDeCommande:index_directeur.html.twig', array(
            'prestataires' => $results
             ));
         }
         elseif($usertype=='PDG')
         {
             return $this->redirect($this->generateUrl('grh_bcjournalier_recherche'));
         }
         else 
         {
             return $this->redirect($this->generateUrl('grh_bondecommande_malist',array('id'=>$userid)));
         }
    }
	public function savAction()
    {
//        if($this->container->get('security.context')->isGranted('ROLE_SAV'))
//        {
                return $this->render('FadcoBundle:Default:menu.html.twig');	
//        }
//        else
//        throw new AccessDeniedException('Vous navez pas Accès a ce Module.');
    }
	public function archiveAction()
    {
//        if($this->container->get('security.context')->isGranted('ROLE_ARCHIVE'))
//				{
					return $this->render('FadcoBundle:Default:menu.html.twig');	
//				}
//				else
//				throw new AccessDeniedException('Vous navez Pas Accès a ce Module.');
    }
    
    
    public function procedureAction()
    {
//        if($this->container->get('security.context')->isGranted('ROLE_PROCEDURE'))
//        {
            return $this->render('FadcoBundle:Default:menu.html.twig');
//        }
//        else
//            throw new AccessDeniedException('Vous navez pas Accès a ce Module.');
    }

}

