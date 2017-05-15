<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use FadcoBundle\Entity\Reabonnement;
use FadcoBundle\Entity\Repair;
use FadcoBundle\Entity\Abonne;
use FadcoBundle\Entity\Alerte;
use FadcoBundle\Entity\Complement;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DistributeurController extends Controller
{
	// liste des réabonnement directs
    public function indexReaboAction()
    {
        $em = $this->getDoctrine()->getManager();

        if($this->getUser()->getType() == "distributeur"){
           $reabos = $em->getRepository('FadcoBundle:Reabonnement')->findBy(
              array('distributeur' => $this->getUser()), array('id' => 'desc'));
        }else{
            $reabos = $em->getRepository('FadcoBundle:Reabonnement')->findBy(
              array(), array('id' => 'desc'));
        }

        return $this->render('FadcoBundle:Distributeur:index-reabo.html.twig', array('reabos' => $reabos));
    }

    // liste des compléments sur réabonnement directs
    public function indexReaboComplementAction()
    {
    	$em = $this->getDoctrine()->getManager();

        if($this->getUser()->getType() == "distributeur"){
    	   $complements = $em->getRepository('FadcoBundle:Complement')->findBy(
    		  array('distributeur' => $this->getUser()), array('id' => 'desc'));
        }else{
            $complements = $em->getRepository('FadcoBundle:Complement')->findBy(
              array(), array('id' => 'desc'));
        }

        return $this->render('FadcoBundle:Distributeur:index-reabo-complement.html.twig', array('complements' => $complements));
    }

    // voir le reabo
    public function showReaboAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Reabonnement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reabonnement entity.');
        }

        return $this->render('FadcoBundle:Distributeur:show-reabo.html.twig', array(
            'entity'      => $entity
        ));
    }

    // voir le complément
    public function showReaboComplementAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Complement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Complement entity.');
        }

        return $this->render('FadcoBundle:Distributeur:show-reabo-complement.html.twig', array(
            'entity'      => $entity
        ));
    }


    // liste des installations et réparations
    public function indexRepairAction()
    {
        $em = $this->getDoctrine()->getManager();

        if($this->getUser()->getType() == "distributeur"){
            $repairs = $em->getRepository('FadcoBundle:Repair')->findBy(
                array('distributeur' => $this->getUser()), array('id' => 'desc'));
        }else{
            $repairs = $em->getRepository('FadcoBundle:Repair')->findBy(
                array(), array('id' => 'desc'));
        }

        return $this->render('FadcoBundle:Distributeur:index-repair.html.twig', array('repairs' => $repairs));
    }

    // nouvelle prestation
    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
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

			$admin = $em->getRepository('FadcoBundle:Prestataire')->findOneBy(array(
				'type' => 'admin'
			));

			$Alerte = new Alerte();
            $Alerte->setPrestataire($this->getUser());
            $Alerte->setMessageAlerte(" a enregistré l'abonné ".$repair->getAbonne()." qui a souscrit à une prestation de type ".$repair->getType());
            $Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_repair'), 'distributeur'));
            $Alerte->setDestinataire($admin);
            $Alerte->setDateAlerte(new \Datetime());
            $Alerte->setEtatAlerte('non lue');

            $em->persist($Alerte);
            $em->flush();

			$from = "ayromas@gmail.com";
			$to = "ayenadedg@gmail.com";
			$subject = "Réparation ou installation";
			$body = "L'abonné ".$repair->getAbonne()." souscrit à une prestation de type ".$repair->getType();
			$this->get('fadco.mailer')->sendMessage($from, $to, $subject, $body);

            return $this->redirect($this->generateUrl('fadco_espace_distributeur_repair'));

        }

        return $this->render('FadcoBundle:Distributeur:new-repair.html.twig', array('abonnes' => $abonnes));

    }

    // nouveau complement
    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function newReaboComplementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reabos = $em->getRepository('FadcoBundle:Reabonnement')->findAll();
        $user = $this->getUser();

        $form = $request->get('fadcobundle_distributeur_new_reabo_complement');

        $session = $request->getSession();
        $complementSession = array();
        
        if($request->getMethod() == 'POST'){

            // recuperer le montant du réabo. direct
            $formules = $em->getRepository('FadcoBundle:Formule')->findAll();

            foreach ($formules as $value) {

                //formule vers
                if($form['options'] == ""){
                    if($form['formule'] == $value->getLibelle()){
                        $formule = $value;
                    }
                }else{
                    if($form['formule'] == $value->getLibelle() and $form['options'] == $value->getOptions()){
                        $formule = $value;
                    }
                }

                // formule ancienne (choix nouveau)
                if($form['optionsOld'] == ""){
                    if($form['formuleOld'] == $value->getLibelle()){
                        $formuleOld = $value;
                    }
                }else{
                    if($form['formuleOld'] == $value->getLibelle() and $form['optionsOld'] == $value->getOptions()){
                        $formuleOld = $value;
                    }
                }

            }

            if(!isset($formule)){
                return $this->render('FadcoBundle:Distributeur:formule-reabo.html.twig');
            }


            if($request->get('choix') == 'ancien'){

                $reabo = $em->getRepository('FadcoBundle:Reabonnement')->find($form['reabo']);

                foreach ($formules as $value) {

                    // formule ancienne (choix ancien)
                    if($reabo->getOptions() == ""){
                        if($reabo->getFormule() == $value->getLibelle()){
                            $formuleOld = $value;
                        }
                    }else{
                        if($reabo->getFormule() == $value->getLibelle() and $reabo->getOptions() == $value->getOptions()){
                            $formuleOld = $value;
                        }
                    }
                }

                if( $formuleOld->getMontant() > $formule->getMontant()){
                    return $this->render('FadcoBundle:Distributeur:migration-complement.html.twig');
                }

                if( ($formule->getMontant() - $formuleOld->getMontant()) > $user->getAccount()){
                    return $this->render('FadcoBundle:Distributeur:compte-reabo-complement.html.twig', array('montant' => $formule->getMontant() - $formuleOld->getMontant() ));
                }

                $complementSession = array(
                    'type'=>'ancien',
                    'reabo'=>$form['reabo'],
                    'formuleOld'=>$reabo->getFormule(),
                    'optionsOld'=>$reabo->getOptions(),
                    'formule' => $form['formule'],
                    'options' => $form['options'],
                    'montant' => $formule->getMontant(),
                    'montantOld' => $formuleOld->getMontant()
                );
        
            }else{

                if(!isset($formuleOld)){
                    return $this->render('FadcoBundle:Distributeur:formule-reabo.html.twig');
                }

                if( $formuleOld->getMontant() > $formule->getMontant()){
                    return $this->render('FadcoBundle:Distributeur:migration-complement.html.twig');
                }

                if(!$this->isNumberCard($form['numeroCarte'])){
                    return $this->render('FadcoBundle:Distributeur:number-reabo-complement.html.twig', array('numberCard' => $form['numeroCarte']));
                }

                if(!$this->isPhone($form['contact'])){
                    return $this->render('FadcoBundle:Distributeur:number-reabo-complement.html.twig', array('contact' => $form['contact']));
                }

                if( ($formule->getMontant() - $formuleOld->getMontant()) > $user->getAccount()){
                    return $this->render('FadcoBundle:Distributeur:compte-reabo-complement.html.twig', array('montant' => $formule->getMontant() - $formuleOld->getMontant() ));
                }

                $complementSession = array(
                    'type'=>'nouveau',
                    'reabo'=>null,
                    'abonne'=>$form['nom'].' '.$form['prenom'],
                    'contact'=>$form['contact'],
                    'numeroAbonne'=>$form['numeroAbonne'],
                    'numeroCarte'=>$form['numeroCarte'],
                    'formuleOld'=>$form['formuleOld'],
                    'optionsOld'=>$form['optionsOld'],
                    'formule' => $form['formule'],
                    'options' => $form['options'],
                    'montant' => $formule->getMontant(),
                    'montantOld' => $formuleOld->getMontant()
                );
            }


            $session->set('resultats', $complementSession);
            return $this->render('FadcoBundle:Distributeur:confirm-reabo-complement.html.twig', array('resultats' => $complementSession));
        }

        return $this->render('FadcoBundle:Distributeur:new-reabo-complement.html.twig', array('reabos' => $reabos));
    }

    // nouveau réabonnement direct
    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function newReaboAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$abonnes = $em->getRepository('FadcoBundle:Abonne')->findAll();
        $user = $this->getUser();

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

            if(!isset($formule)){
                return $this->render('FadcoBundle:Distributeur:formule-reabo.html.twig');
            }

            if($form['duree'] == '1 mois') $coef = 1;
            if($form['duree'] == '3 mois') $coef = 3;
            if($form['duree'] == '6 mois') $coef = 6;
            if($form['duree'] == '12 mois') $coef = 12;

            if($formule->getMontant()*$coef > $user->getAccount()){
                return $this->render('FadcoBundle:Distributeur:compte-reabo.html.twig', array('montant' => $formule->getMontant() ));
            }

    		if($request->get('choix') == 'ancien'){

    			$abonne = $em->getRepository('FadcoBundle:Abonne')->find($form['abonnea']);

    			$reaboSession = array(
                    'abonne'=>$abonne->getNom().' '.$abonne->getPrenom(),
    				'numeroAbonne'=>$abonne->getNumeroAbonne(),
    				'numeroCarte' => $abonne->getNumeroCarte(),
    				'contact' => $abonne->getContact(),
    				'formule' => $form['formule'],
    				'duree' => $form['duree'],
    				'options' => $form['options'],
    				'montant' => $formule->getMontant()
    			);
        
    		}else{

                if(!$this->isNumberCard($form['numeroCarte'])){
                    return $this->render('FadcoBundle:Distributeur:number-reabo.html.twig', array('numberCard' => $form['numeroCarte']));
                }

                if(!$this->isPhone($form['contact'])){
                    return $this->render('FadcoBundle:Distributeur:number-reabo.html.twig', array('contact' => $form['contact']));
                }

    			$reaboSession = array(
                    'nom'=>$form['nom'],
                    'prenom'=>$form['prenom'],
    				'numeroAbonne'=>$form['numeroAbonne'],
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

    public function isNumberCard($numberCard){

        $pattern = '#[0-9]#';

        $retour = true;

        for($i=strlen($numberCard)-1; $i>=0; $i--){
            if(!preg_match($pattern, $numberCard[$i], $matches)) $retour = false;
        }

        return $retour;
    }

    public function isPhone($numberCard){

        $pattern = '#[0-9]#';

        $retour = true;

        for($i=strlen($numberCard)-1; $i>=0; $i--){
            if(!preg_match($pattern, $numberCard[$i], $matches)) $retour = false;
        }

        return $retour;
    }

    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function newClientAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $form = $request->get('fadcobundle_distributeur_new_client');

        if($request->getMethod() == 'POST'){

            $abonne = new Abonne();

            if(!$this->isNumberCard($form['numeroCarte'])){
                return $this->render('FadcoBundle:Distributeur:number-reabo.html.twig', array('numberCard' => $form['numeroCarte'], 'client' => 'client'));
            }

            if(!$this->isPhone($form['contact'])){
                return $this->render('FadcoBundle:Distributeur:number-reabo.html.twig', array('contact' => $form['contact'], 'client' => 'client'));
            }

            $abonne->setNom($form['nom']);
            $abonne->setPrenom($form['prenom']);
            $abonne->setNumeroCarte($form['numeroCarte']);
            $abonne->setNumeroAbonne($form['numeroAbonne']);
            $abonne->setContact($form['contact']);
            $abonne->setDate(new \DateTime());

            $em->persist($abonne);
            $em->flush();

            return $this->redirect($this->generateUrl('fadco_espace_distributeur_repair'));

        }

        return $this->render('FadcoBundle:Distributeur:new-client.html.twig');

    }

    /**
    * confirmation du complément
    *
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function newReaboComplementConfirmAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $session = $request->getSession();
        $complementSession = $session->get('resultats');
        $user = $this->getUser();

        $complement = new Complement();

        $complement->setDate(new \DateTime());
        $complement->setDistributeur($user);

        if($complementSession['reabo']){
            $reabo = $em->getRepository('FadcoBundle:Reabonnement')->find($complementSession['reabo']);
            $complement->setReabo($reabo);
            $complement->setAbonne($reabo->getAbonne());
            $complement->setNumeroAbonne($reabo->getNumeroAbonne());
            $complement->setNumeroCarte($reabo->getNumeroCarte());
            $complement->setContact($reabo->getContact());
        }else{
            $complement->setAbonne($complementSession['abonne']);
            $complement->setNumeroAbonne($complementSession['numeroAbonne']);
            $complement->setNumeroCarte($complementSession['numeroCarte']);
            $complement->setContact($complementSession['contact']);
        }

        $complement->setOptions($complementSession['options']);
        $complement->setFormule($complementSession['formule']);
        $complement->setOldFormule($complementSession['formuleOld']);
        $complement->setOldOptions($complementSession['optionsOld']);
        $complement->setMontant($complementSession['montant'] - $complementSession['montantOld']);

        $user->setAccount($user->getAccount() - ($complementSession['montant'] - $complementSession['montantOld']) );

        $em->persist($complement);
        $em->flush();

        $admins = array();

        $super = $em->getRepository('FadcoBundle:Prestataire')->findOneBy(array(
            'type' => 'super_admin'
        ));

        $admins = $em->getRepository('FadcoBundle:Prestataire')->findBy(array(
            'type' => 'admin'
        ));

        $Alerte = new Alerte();
        $Alerte->setPrestataire($this->getUser());
        $Alerte->setMessageAlerte(" a enregistré  un complément de ".$complementSession['formuleOld']."/".$complementSession['optionsOld']." vers ".$complementSession['formule']."/".$complementSession['options']);
        $Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_reabo_complement_show', array('id'=> $complement->getId())), 'distributeur'));
        $Alerte->setDestinataire($super);
        $Alerte->setDateAlerte(new \Datetime());
        $Alerte->setEtatAlerte('non lue');
        $em->persist($Alerte);

        foreach ($admins as $value) {
            $Alerte = new Alerte();
            $Alerte->setPrestataire($this->getUser());
            $Alerte->setMessageAlerte(" a enregistré  un complément de ".$complementSession['formuleOld']."/".$complementSession['optionsOld']." vers ".$complementSession['formule']."/".$complementSession['options']);
            $Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_reabo_complement_show', array('id'=> $complement->getId())), 'distributeur'));
            $Alerte->setDestinataire($value);
            $Alerte->setDateAlerte(new \Datetime());
            $Alerte->setEtatAlerte('non lue');
            $em->persist($Alerte);
        }

        $em->flush();

        $from = "ayenadedg@gmail.com";
        $to = "ayenadedg@gmail.com";
        $subject = "Réabonnement";
        $body = "Complément de ".$complementSession['formuleOld']."/".$complementSession['optionsOld']." vers ".$complementSession['formule']."/".$complementSession['options'];
        $this->get('fadco.mailer')->sendMessage($from, $to, $subject, $body);

        $complementSession = array();
        $session->remove('resultats');

        return $this->redirect($this->generateUrl('fadco_espace_distributeur_reabo_complement_show', array('id' => $complement->getId())));

    }
    

    /**
    *confrmation du réabonnement 
    *
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function newReaboConfirmAction(Request $request){

    	$em = $this->getDoctrine()->getManager();

        $session = $request->getSession();
        $reaboSession = $session->get('resultats');
        $user = $this->getUser();

        $reabo = new Reabonnement();

        if(isset($reaboSession['abonne'])){
            $reabo->setAbonne($reaboSession['abonne']);
        }else{
            $reabo->setAbonne($reaboSession['nom'].' '.$reaboSession['prenom']);

            $abonne = new Abonne();

            $abonne->setNom($reaboSession['nom']);
            $abonne->setPrenom($reaboSession['prenom']);
            $abonne->setNumeroCarte($reaboSession['numeroCarte']);
            $abonne->setNumeroAbonne($reaboSession['numeroAbonne']);
            $abonne->setContact($reaboSession['contact']);
            $abonne->setDate(new \DateTime());

            $em->persist($abonne);

        }

        if($reaboSession['duree'] == '1 mois') $coef = 1;
        if($reaboSession['duree'] == '3 mois') $coef = 3;
        if($reaboSession['duree'] == '6 mois') $coef = 6;
        if($reaboSession['duree'] == '12 mois') $coef = 12;

        $reabo->setNumeroAbonne($reaboSession['numeroAbonne']);
        $reabo->setFormule($reaboSession['formule']);
        $reabo->setMontant($reaboSession['montant']*$coef);
        $reabo->setOptions($reaboSession['options']);
        $reabo->setDuree($reaboSession['duree']);
        $reabo->setContact($reaboSession['contact']);
        $reabo->setNumeroCarte($reaboSession['numeroCarte']);

        $reabo->setDate(new \DateTime());
        $reabo->setDistributeur($user);

        $user->setAccount($user->getAccount() - $reaboSession['montant']);

        $em->persist($reabo);
        $em->flush();

        $admins = array();

		$super = $em->getRepository('FadcoBundle:Prestataire')->findOneBy(array(
            'type' => 'super_admin'
        ));

        $admins = $em->getRepository('FadcoBundle:Prestataire')->findBy(array(
			'type' => 'admin'
		));

		$Alerte = new Alerte();
		$Alerte->setPrestataire($this->getUser());
		$Alerte->setMessageAlerte(" a enregistré l'abonné ".$reabo->getAbonne()." qui a souscrit à un réabonnement ".$reabo->getFormule()."/".$reabo->getDuree()."/".$reabo->getOptions());
        //$Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_reabo'), 'distributeur'));
		$Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_reabo_show', array('id'=> $reabo->getId())), 'distributeur'));
		$Alerte->setDestinataire($super);
		$Alerte->setDateAlerte(new \Datetime());
		$Alerte->setEtatAlerte('non lue');
		$em->persist($Alerte);

        foreach ($admins as $value) {
            $Alerte = new Alerte();
            $Alerte->setPrestataire($this->getUser());
            $Alerte->setMessageAlerte(" a enregistré l'abonné ".$reabo->getAbonne()." qui a souscrit à un réabonnement ".$reabo->getFormule()."/".$reabo->getDuree()."/".$reabo->getOptions());
            $Alerte->setLienAlerte('/' . strrchr($this->get('router')->generate('fadco_espace_distributeur_reabo_show', array('id'=> $reabo->getId())), 'distributeur'));
            $Alerte->setDestinataire($value);
            $Alerte->setDateAlerte(new \Datetime());
            $Alerte->setEtatAlerte('non lue');
            $em->persist($Alerte);
        }

        $em->flush();

		$from = "ayenadedg@gmail.com";
		$to = "ayenadedg@gmail.com";
		$subject = "Réabonnement";
		$body = "L'abonné ".$reabo->getAbonne()." souscrit à un réabonnement ".$reabo->getFormule()."/".$reabo->getDuree()."/".$reabo->getOptions();
		$this->get('fadco.mailer')->sendMessage($from, $to, $subject, $body);

        $reaboSession = array();
        $session->remove('resultats');

        return $this->redirect($this->generateUrl('fadco_espace_distributeur_reabo_show', array('id' => $reabo->getId())));

    }

    // renouvellement offre a l'identique
    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
    public function renewReaboAction(Request $request, $id){

    	$em = $this->getDoctrine()->getManager();
    	$reabo = $em->getRepository('FadcoBundle:Reabonnement')->find($id);

        $session = $request->getSession();
        $reaboSession = $session->get('resultats');

    	$reaboSession = array(
            'abonne'=>$reabo->getAbonne(),
            'numeroAbonne'=>$reabo->getNumeroAbonne(),
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

    /**
    * @Security("has_role('ROLE_DISTRIBUTEUR')")
    */
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
        	$numeroAbonne = $abonne->getNumeroAbonne();
        	$contact = $abonne->getContact();
        }

        $array = array();

        $response = new JsonResponse( array(
            'id'=>$id,
            'numeroCarte'=>$numeroCarte, 
            'numeroAbonne'=>$numeroAbonne, 
            'contact'=>$contact)
        );

        return $response;
        
    }

    public function validerReaboComplementAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $complement = $em->getRepository('FadcoBundle:Complement')->find($id);

        if($request->getMethod() == 'POST'){

            $form = $request->get('fadcobundle_valider_reabo');
            $dateEcheance = date_create($form['dateEcheance']);
            $complement->setDateEcheance($dateEcheance);
            $complement->setValideur($this->getUser());
            $complement->setDateValide(new \Datetime());
            
            $em->flush();

            $retour = 'OK';
            return new Response($retour);

        }

        return new Response($this->renderView('FadcoBundle:Distributeur:valider-reabo.html.twig', array(
            'complement' => $complement
        )));
    }

    public function validerReaboAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $reabo = $em->getRepository('FadcoBundle:Reabonnement')->find($id);

        if($request->getMethod() == 'POST'){

            $form = $request->get('fadcobundle_valider_reabo');
            $dateEcheance = date_create($form['dateEcheance']);
            $reabo->setDateEcheance($dateEcheance);
            $reabo->setValideur($this->getUser());
            $reabo->setDateValide(new \Datetime());
            
            $em->flush();

            $retour = 'OK';
            return new Response($retour);

        }

        return new Response($this->renderView('FadcoBundle:Distributeur:valider-reabo.html.twig', array(
            'reabo' => $reabo
        )));
    }
}