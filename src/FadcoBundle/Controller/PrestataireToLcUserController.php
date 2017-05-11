<?php

namespace GSPBundle\Controller;
use GSPBundle\Entity\Prestataire;
use LCBundle\Entity\LcUser;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PrestataireToLcUserController
 *
 * @author crrs
 */
class PrestataireToLcUserController extends Controller
{
   public function commitAction(){
       
       
       $em = $this->getDoctrine()->getManager();
       $d = new \Datetime();
       $prestatairesArray = $em->getRepository('GSPBundle:Prestataire')->findAll();
       $cmp = 0;
       foreach ($prestatairesArray as $p) {
            $user = $em->getRepository('LCBundle:LcUser')->findOneByIdoriginal($p->getId());
            if ($user == null) {
                $lcusers[] = new LcUser();
                $lcusers[$cmp]->setIdoriginal($p->getId());            
                $lcusers[$cmp]->setDerniereconnexion($d);
                $lcusers[$cmp]->setNom($p->getNom());
                $lcusers[$cmp]->setPrenom($p->getPrenom());
                $em->persist($lcusers[$cmp]);
                $em->flush();
                $cmp++;
            }
       }
       
       
       /*
       $em = $this->getDoctrine()->getManager();
       $d = new \Datetime();
       $lcUsersGroups = $em->getRepository('LCBundle:LcUser')->findAllGroupBy("idoriginal");
       foreach ($lcUsersGroups as $ua) {
            $les = $em->getRepository('LCBundle:LcUser')->getDuplicated($ua->getId(), $ua->getIdoriginal());
            foreach ($les as $val) {
                $em->remove($val);
            }
       }
       $em->flush();
       */
       
       return new Response("OK");
   }
}
