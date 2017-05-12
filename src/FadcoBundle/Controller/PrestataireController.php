<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use \FOS\UserBundle\Form\Factory\FactoryInterface;

use LCBundle\Entity\LcUser;
use FadcoBundle\Entity\Prestataire;
use FOS\UserBundle\Form\Type\ChangePasswordFormType;
use FadcoBundle\Form\PrestataireUpdateType;
use FadcoBundle\Form\CreditAccountDistributeurType;
use FadcoBundle\Entity\TypePrestataire;
use FadcoBundle\Form\PrestataireType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Prestataire controller.
 * 
 */
class PrestataireController extends BaseController
{

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FadcoBundle:Prestataire')->findAll();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id = null;

        return $this->render('FadcoBundle:Prestataire:index.html.twig', array(
            'entities' => $entities,

            'user' => $user,
            'contro'=>$this,

            'id' => $id,
            'user' => $user

        ));
    }
    
    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_USER')")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Prestataire')->find($this->getUser()->getId());
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestataire entity.');
        }



        return $this->render('FadcoBundle:Prestataire:show.html.twig', array(
            'entity'      => $entity,
            'user'      => $user,
            'contro'=>$this
        ));
    }
	
    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
	public function voirAction($id)
    {
                $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Prestataire')->find($id);
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestataire entity.');
        }

        return $this->render('FadcoBundle:Prestataire:show.html.twig', array(
            'entity'      => $entity,
            'user'      => $user
        ));
    }
    
    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function activeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Prestataire')->find($id);
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestataire entity.');
        }

        $entity->setEnabled(1);
        $em->flush();

       return $this->redirect($this->generateUrl('grh_prestataire'));
    }

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function desactiveAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Prestataire')->find($id);
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prestataire entity.');
        }

        $entity->setEnabled(0);
        $em->flush();

       return $this->redirect($this->generateUrl('grh_prestataire'));
    }

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        //$user = $this->getUser();
        //$this->get('fos_user.user_manager')->updateUser($user, false);
        $em = $this->getDoctrine()->getManager();

        if( is_null($id) or $id == "= null" or $id == "" ){

            $prestataire = new Prestataire();
            $nouveau = 'oui';
            $form = $this->createEditForm($prestataire);
            $form->handleRequest($request);
            if ($form->isValid()) {

                $em->persist($prestataire);
                $em->flush();

                //$msg = "Activation de compte nouveau prestataire en attente";
                //$this->get("gsp.autorites.sms.sender")->sendSmsToDG($msg);

                return $this->redirect($this->generateUrl('grh_prestataire_voir', array('id' => $prestataire->getId())));
            }   else{
                //return new Response('FORM NON VALIDE');
                return $this->render('FadcoBundle:Pages:error.html.twig');
            }

        }else{
            $nouveau = 'non';
            $prestataire = $em->getRepository('FadcoBundle:Prestataire')->find($id);
            $form = $this->createCreateForm($prestataire);
            $form->handleRequest($request);
            if ($form->isValid()) {
                $prestataire->upload();
                $em->flush();
                return $this->redirect($this->generateUrl('grh_prestataire_voir', array('id' => $id)));
            }else{
                //return new Response('FORM NON VALIDE');
                return $this->render('FadcoBundle:Pages:error.html.twig');
            }

        }

        return $this->render('FadcoBundle:Prestataire:edit.html.twig', array(
            'prestataire' => $prestataire,
            'form'   => $form->createView(),
        ));

        
    }
    
    /**
    * Creates a form to edit a Prestataire entity.
    *
    * @param Prestataire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Prestataire $entity)
    {
        if( !is_null($entity->getId()) ) {
            $form = $this->createForm(new PrestataireUpdateType(), $entity, array(
                'action' => $this->generateUrl('grh_prestataire_update', array(
                'id' => $entity->getId())),
                'method' => 'POST',
            ));
        }else{
            $id = null;
            $form = $this->createForm(new PrestataireUpdateType(), $entity, array(
                'action' => $this->generateUrl('grh_prestataire_update', array(
                'id' => $id )),
                'method' => 'POST',
            ));
        }

        return $form;
    }

    private function createCreateForm(Prestataire $entity)
    {
        if( !is_null($entity->getId()) ) {
            $form = $this->createForm(new PrestataireType(), $entity, array(
                'action' => $this->generateUrl('grh_prestataire_update', array(
                'id' => $entity->getId())),
                'method' => 'POST',
            ));
        }else{
            $id = null;
            $form = $this->createForm(new PrestataireUpdateType(), $entity, array(
                'action' => $this->generateUrl('grh_prestataire_update', array(
                'id' => $id )),
                'method' => 'POST',
            ));
        }
        
        return $form;
    }
    
    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        //$entity = $this->getUser();
        if(is_null($id) or $id == "= null" or $id == "" ){
            $prestataire = new Prestataire();
            $nouveau = 'oui';
            $form = $this->createEditForm($prestataire);
            return $this->render('FadcoBundle:Prestataire:edit.html.twig', array(
                'prestataire'      => $prestataire,
                'nouveau'      => $nouveau,
                'form'   => $form->createView(),
            ));
        }else{
            $nouveau = 'non';
            $prestataire = $em->getRepository('FadcoBundle:Prestataire')->find($id);
            $form = $this->createCreateForm($prestataire);
            return $this->render('FadcoBundle:Prestataire:edit.html.twig', array(
                'prestataire'      => $prestataire,
                'nouveau'      => $nouveau,
                'form'   => $form->createView(),
            ));
        }

    }

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function creditAccountAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $prestataire = $em->getRepository('FadcoBundle:Prestataire')->find($id);

        $form = $this->createForm(new CreditAccountDistributeurType(), $prestataire, array(
            'action' => $this->generateUrl('crediter_compte_distributeur', array(
            'id' => $id)),
            'method' => 'POST',
        ));

        if ($this->getRequest()->getMethod() == 'POST') {

            //var_dump($form['account']);
            //die();
            $form->handleRequest($request);
            $em->flush();

            return $this->redirect($this->generateUrl('grh_prestataire_voir', array('id' => $prestataire->getId())));
        }   
        //else{
            //return new Response('FORM NON VALIDE');
            //return $this->render('FadcoBundle:Pages:error.html.twig');
        //}

        return $this->render('FadcoBundle:Prestataire:creditAccountDistributeur.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function mainPageAction()
    {
        return $this->render('FadcoBundle:Prestataire:main-page.html.twig');
    }

    public function changeAction(){
        $formFactory = $this->get('fos_user.change_password.form.factory');
        $form = $formFactory->createForm();
        $form->setData($this->getUser());
        $form->add("submit","submit");
        return $this->render('FadcoBundle:Prestataire:changePassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function changePasswordAction(Request $request){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);


        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);
        $form->add("submit","submit");

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);
            $response =new Response();
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
            $form ->initialize();

            return $this->render('FadcoBundle:Prestataire:changePassword.html.twig', array(
            'form' => $form->createView(),
            'success'=>"<h3>REUSSITE!</h3><div>Vous avez changé votre mot de passe avec success</div>",
        ));
        }

        return $this->render('FadcoBundle:Prestataire:changePassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function modifierProfileAction(){
        $userId = $this->getUser()->getId();

        return new Response($this->renderView("FadcoBundle:Prestataire:modifierProfile.html.twig",
            array(
                'userId' => $userId,
            )));
    }

    public function photoPrestataireAction(Request $request){
        $user = $this->getUser();

        $id  = $user->getId();

        if ($request->files->has('files')) {

            $em = $this->getEntityManager();

            $prestataire = $em->getRepository("FadcoBundle:Prestataire")->find($id);

            $prestataire->setFile($request->files->get('files'));

            $em->persist($prestataire);

            $em->flush();
             return $this->redirect($this->generateUrl('grh_prestataire_voir', array(
                'id' => $id
            )));
        }

        return $this->redirect($this->generateUrl('grh_prestataire_voir', array(
            'id' => $id
        )));


    }

    public function getRoleExpression($user){

        $em = $this->getDoctrine()->getManager();

        $roles = $user->getRoles();
        $t = '';

      foreach ($roles as $key) {
         $t.= $key .'<br />'; 

      }

      return $t;
    }

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function changeRigthAction(Request  $request,$option,$userId){

        $em = $this->getDoctrine()->getManager();
        $userManager = $this->get('fos_user.user_manager');
        $roles = array();


        $user = $em->getRepository('FadcoBundle:Prestataire')->find($userId);
        $action = ''; 

         if($request->getMethod()!='POST')
         {
            if($option=='add')
            {
                $r = $user->getRoles();
                $rb = $em->getRepository('FadcoBundle:Rigth')->findAll();
                $rb_list = array();

                foreach ($rb as $key) {
                   $rb_list[] = $key->getExpress();
                }

                foreach ($rb_list as $key) {
                   
                   if(!in_array($key, $r))
                   {
                    $roles[] = $key;
                   }
                }


                $action = 'add';

            }
            else
            {
                $roles = $user->getRoles();
                $action = 'delete';
                     
            }

            return new Response ($this->renderView('FadcoBundle:Rigth:change.html.twig',array('roles'=>$roles,'user'=>$userId,'option'=>$option)));
         }
         else
         {
            $action = $request->request->get('option');

            if($option=='add')
            {   

                $userId = $request->request->get('user');

                $user = $em->getRepository('FadcoBundle:Prestataire')->find($userId);
                $checked = $request->request->get('roles');

                foreach($checked as $role)
                {
                    $user->addRole($role);
                }
            }
            else
            {
                $userId = $request->request->get('user');

                $user = $em->getRepository('FadcoBundle:Prestataire')->find($userId);
                $checked = $request->request->get('roles');

                foreach($checked as $role)
                {
                    $user->removeRole($role);
                }
            }
         }

        
         $userManager->updateUser($user);

        // Envoyer un sms au prestataire
        $contact = $user->getContact();
        if(!is_null($contact)){
            $this->get('sms')->sendSms($contact, "Certains de vos droits d'accès à GSP MANAGER ont été modifiés.");
        }


        return $this->redirect($this->generateUrl('grh_prestataire'));

    }

    /**
     * Lists all prestataire entities.
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function getPrestataireEnabledAction(){
        $em = $this->getDoctrine()->getManager();
        $prestataireEnabled = $em->getRepository('FadcoBundle:Prestataire')->findBy(array("enabled"=>1));

        return new Response($this->renderView('FadcoBundle:Prestataire\Etats:prestataireActif.html.twig', array('prestataires'=>$prestataireEnabled)));
    }

}
