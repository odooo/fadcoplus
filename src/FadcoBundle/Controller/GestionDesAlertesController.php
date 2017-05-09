<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GestionDesAlertesController extends Controller
{
   
    
    public function notificationsAction()
    {
       $em = $this->getDoctrine()->getManager();
       $user= $this->container->get('security.context')->getToken()->getUser();
       $alertesnonlu = $em->getRepository('FadcoBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->andWhere("a.etat_alerte IN ('non lue', 'non lu')")
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->getQuery()
                ->getResult();
       
       $alertes = $em->getRepository('FadcoBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->getQuery()
                ->getResult();
          
        return $this->render('FadcoBundle:GestionDesAlertes:notifications.html.twig', array(
            'alertes' =>$alertesnonlu,
            'total'=>count($alertesnonlu),
            'totalalertes'=>count($alertes),
        ));
    }
    
    public function ShowAllAction()
    {
       $em = $this->getDoctrine()->getManager();
       $user= $this->container->get('security.context')->getToken()->getUser();
       $alertesnonlu = $em->getRepository('FadcoBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->andWhere('a.etat_alerte=:etat')
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->setParameter(":etat",'non lue')
                ->getQuery()
                ->getResult();
       
       $alertes = $em->getRepository('FadcoBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->getQuery()
                ->getResult();
          
        return $this->render('FadcoBundle:GestionDesAlertes:ShowAll.html.twig', array(
            'alertes' =>$alertes,
            'total'=>count($alertesnonlu),
            'totalalertes'=>count($alertes),
        ));
    }
    public function luAction(Request $request, $id)
    {
       $em = $this->getDoctrine()->getManager();
       $entity = $em->getRepository('FadcoBundle:Alerte')->find($id);

        $expediteur = $entity->getPrestataire();
        $url = $entity->getLienAlerte();

        // récupérer l'utilisateur connecté, c'est lui le destinataire du courrier
        $destinataire = $this->getUser()->getName();

        // tester si courier est contenu dans le lien
        $pos = strpos($url, "courrier-interne");
        if ($pos !== false) {
            // Tester si c'est un courier qui est réceptionné et accuser reception
            $msg = "Votre courrier a été réceptionné par le destinataire '$destinataire'";
            $contact = $expediteur->getContact();
            if(!is_null($contact)){
                $this->get('sms')->sendSms($contact, $msg);
            }

        }


        // tester si le notaire a réceptionné le dossier
        $pos = strpos($url, "dossierexterne");
        if ($pos !== false) {
            // Tester si c'est un courier qui est réceptionné et accuser reception
            $msg = "Votre dossier envoyé au notaire a été recu et ouvert";
            $contact = $expediteur->getContact();
            if(!is_null($contact)){
                $this->get('sms')->sendSms($contact, $msg);
            }

        }

       $entity->setEtatAlerte('lue');
       $em->flush();
       $response = new Response('Content', 200, array('content-type' => 'text/html'));
       $response->setContent('');
       return $response;
        
    }
    
    public function raflaichirAction(Request $request, $id)
    {
       $em = $this->getDoctrine()->getManager();
       $user= $em->getRepository('FadcoBundle:Prestataire')->find($id);
       $alertesnonlu = $em->getRepository('GSPBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->andWhere('a.etat_alerte=:etat')
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->setParameter(":etat",'non lue')
                ->getQuery()
                ->getResult();
       
       $alertes = $em->getRepository('FadcoBundle:Alerte')->createQueryBuilder("a")
                ->where("a.Destinataire=:user")
                ->orderBy("a.id_alerte","DESC")
                ->setParameter(":user",$user)
                ->getQuery()
                ->getResult();
          
        return $this->render('FadcoBundle:GestionDesAlertes:raflaichir.html.twig', array(
            'alertes' =>$alertes,
            'total'=>count($alertesnonlu),
            'totalalertes'=>count($alertes),
        ));
    }
    
}
