<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use FadcoBundle\Entity\Reabonnement;
use FadcoBundle\Entity\Repair;
use FadcoBundle\Entity\Abonne;

class DistributeurController extends Controller
{
	// liste des réabonnement directs
    public function indexReaboAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$reabos = $em->getRepository('FadcoBundle:Reabonnement')->findBy(
    		array(), array('id' => 'desc'));
        return $this->render('FadcoBundle:Distributeur:index-reabo.html.twig', array('reabos' => $reabos));
    }

    // liste des installations et réparations
    public function indexRepairAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repairs = $em->getRepository('FadcoBundle:Repair')->findBy(
            array(), array('id' => 'desc'));
        return $this->render('FadcoBundle:Distributeur:index-repair.html.twig', array('repairs' => $repairs));
    }

    // nouvelle prestation
    public function newRepairAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $abonnes = $em->getRepository('FadcoBundle:Abonne')->findAll();

        $form = $request->get('fadcobundle_distributeur_new_repair');

        if($request->getMethod() == 'POST'){

            $abonne = $em->getRepository('FadcoBundle:Abonne')->find($form['abonne']);

            $repair = new Repair();

            $repair->setAbonne($abonne->getName());
            $repair->setContact($abonne->getContact());
            $repair->setType($form['type']);
            $repair->setLieu($form['lieu']);
            $repair->setForme($form['forme']);
            $repair->setEndroit($form['endroit']);
            $repair->setMontant($form['montant']);
            $repair->setDate(new \DateTime());
            $repair->setDistributeur($this->getUser());

            $em->persist($repair);
            $em->flush();

            return $this->redirect($this->generateUrl('fadco_espace_distributeur_repair'));

        }

        return $this->render('FadcoBundle:Distributeur:new-repair.html.twig', array('abonnes' => $abonnes));

    }

    // nouveau réabonnement direct
    public function newReaboAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$abonnes = $em->getRepository('FadcoBundle:Abonne')->findAll();

    	$form = $request->get('fadcobundle_distributeur_new_reabo');

    	$session = $request->getSession();
        $reaboSession = array();
        
    	if($request->getMethod() == 'POST'){

    		// recuperer le montant du réabo. direct
    		$formules = $em->getRepository('FadcoBundle:Formule')->findAll();

    		foreach ($formules as $value) {
    			if($form['options'] == ""){
    				if($form['formule'] == $value->getLibelle()){
    					$formule = $value;
    				}
    			}else{
    				if($form['formule'] == $value->getLibelle() and $form['options'] == $value->getOptions()){
    					$formule = $value;
    				}
    			}
    		}

    		if($request->get('choix') == 'ancien'){

    			$abonne = $em->getRepository('FadcoBundle:Abonne')->find($form['abonnea']);

    			$reaboSession = array(
    				'abonne'=>$abonne->getName(),
    				'numeroCarte' => $abonne->getNumeroCarte(),
    				'contact' => $abonne->getContact(),
    				'formule' => $form['formule'],
    				'duree' => $form['duree'],
    				'options' => $form['options'],
    				'montant' => $formule->getMontant()
    			);
        
    		}else{

    			$reaboSession = array(
    				'abonne'=>$form['abonned'],
    				'numeroCarte'=>$form['numeroCarte'],
    				'contact'=>$form['contact'],
    				'formule' => $form['formule'],
    				'duree' => $form['duree'],
    				'options' => $form['options'],
    				'montant' => $formule->getMontant()
    			);
    		}

    		$session->set('resultats', $reaboSession);

    		return $this->render('FadcoBundle:Distributeur:confirm-reabo.html.twig', array('resultats' => $reaboSession));
    	}

        return $this->render('FadcoBundle:Distributeur:new-reabo.html.twig', array('abonnes' => $abonnes));
    }

    public function newClientAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $form = $request->get('fadcobundle_distributeur_new_client');

        if($request->getMethod() == 'POST'){

            $abonne = new Abonne();

            $abonne->setNom($form['nom']);
            $abonne->setPrenom($form['prenom']);
            $abonne->setNumeroCarte($form['numeroCarte']);
            $abonne->setContact($form['contact']);
            $abonne->setDate(new \DateTime());

            $em->persist($abonne);
            $em->flush();

            return $this->redirect($this->generateUrl('fadco_espace_distributeur_repair'));

        }

        return $this->render('FadcoBundle:Distributeur:new-client.html.twig');

    }

    public function newReaboConfirmAction(Request $request){

    	$em = $this->getDoctrine()->getManager();

        $session = $request->getSession();
        $reaboSession = $session->get('resultats');
        $user = $this->getUser();

        $reabo = new Reabonnement();

        $reabo->setAbonne($reaboSession['abonne']);
        $reabo->setFormule($reaboSession['formule']);
        $reabo->setMontant($reaboSession['montant']);
        $reabo->setOptions($reaboSession['options']);
        $reabo->setDuree($reaboSession['duree']);
        $reabo->setContact($reaboSession['contact']);
        $reabo->setNumeroCarte($reaboSession['numeroCarte']);

        $reabo->setDate(new \DateTime());
        $reabo->setDistributeur($user);

        $user->setAccount($user->getAccount() - $reaboSession['montant']);

        $em->persist($reabo);
        $em->flush();

        return $this->redirect($this->generateUrl('fadco_espace_distributeur_reabo'));

    }

    // renouvellement offre a l'identique
    public function renewReaboAction(Request $request, $id){

    	$em = $this->getDoctrine()->getManager();
    	$reabo = $em->getRepository('FadcoBundle:Reabonnement')->find($id);

        $session = $request->getSession();
        $reaboSession = $session->get('resultats');

    	$reaboSession = array(
			'abonne'=>$reabo->getAbonne(),
			'numeroCarte'=>$reabo->getNumeroCarte(),
			'contact'=>$reabo->getContact(),
			'formule' => $reabo->getFormule(),
			'duree' => $reabo->getDuree(),
			'options' => $reabo->getOptions(),
			'montant' => $reabo->getMontant()
		);

        $session->set('resultats', $reaboSession);

        return $this->render('FadcoBundle:Distributeur:confirm-reabo.html.twig', array('resultats' => $reaboSession));

    }

    public function ancienAbonneReaboAction(Request $request)
    {
        $id = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();

        if($id == ""){
        	$contact = null;
        	$numeroCarte = null;
        }else{
        	$abonne = $em->getRepository('FadcoBundle:Abonne')->find($id);
        	$numeroCarte = $abonne->getNumeroCarte();
        	$contact = $abonne->getContact();
        }

        $array = array();

        $response = new JsonResponse( array(
            'id'=>$id,
            'numeroCarte'=>$numeroCarte, 
            'contact'=>$contact)
        );

        return $response;
        
    }
}