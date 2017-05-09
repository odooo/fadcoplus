<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FadcoBundle\Entity\Dossier;
use FadcoBundle\Form\DossierType;

/**
 * Dossier controller.
 *
 */
class DossierController extends Controller
{
    /**
     * Lists all Dossier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FadcoBundle:Dossier')->findAll();

        return $this->render('FadcoBundle:Dossier:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Dossier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Dossier();
        $entity->setDatEnregistrement(new \DateTime());
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archive_dossier_show', array('id' => $entity->getId())));
        }

        return $this->render('FadcoBundle:Dossier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Dossier entity.
     *
     * @param Dossier $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dossier $entity)
    {
        $form = $this->createForm(new DossierType(), $entity, array(
            'action' => $this->generateUrl('archive_dossier_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Dossier entity.
     *
     */
    public function newAction()
    {
        $entity = new Dossier();
        $form   = $this->createCreateForm($entity);

        return $this->render('FadcoBundle:Dossier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dossier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FadcoBundle:Dossier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dossier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossier entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FadcoBundle:Dossier:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Dossier entity.
    *
    * @param Dossier $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dossier $entity)
    {
        $form = $this->createForm(new DossierType(), $entity, array(
            'action' => $this->generateUrl('archive_dossier_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Dossier entity.
     *
     */
    
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quartier entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('archive_dossier_show', array('id' => $id)));
        }

        return $this->render('FadcoBundle:Dossier:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Dossier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
             $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FadcoBundle:Dossier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException(' le Dossier est introuvable.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('archive_dossier'));
    }

    /**
     * Creates a form to delete a Dossier entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archive_dossier_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function searchAction(Request $request)
    {
        $nbParPage=10;
        if($request->getMethod()=="POST"){
            $post=$request->request;
            $em = $this->getDoctrine()->getManager();
            
            $nbEntity=$em->getRepository("FadcoBundle:Dossier")->count($post);
            $page=ceil($nbEntity/$nbParPage);
            $entities=$em->getRepository("FadcoBundle:Dossier")->search($post,0,(int)$nbParPage);
            $request->getSession()->set("rech", $post);
            $request->getSession()->set("page", $page);
            return $this->render('FadcoBundle:Dossier:search.html.twig',  [
                    "active"=>$post->get("active"),
                    "entities"=>$entities,
                    "post"=>$post,
                    "page"=>$page,
                    "min"=>1,
                ]);
            }
            
        if($request->getMethod()=="GET" && $request->query->get("page")){
            $em = $this->getDoctrine()->getManager();
            $post=$request->getSession()->get("rech");
            $page=$request->getSession()->get("page");
            $init=((int)$request->query->get("page")-1)*(int)$nbParPage;
            if($init>$page){
                $init=$page;
            }
            $entities=$em->getRepository("FadcoBundle:Dossier")->search($post,$init,$nbParPage);
            return $this->render('FadcoBundle:Dossier:search.html.twig',  [
                "active"=>$post->get("active"),
                "entities"=>$entities,
                "post"=>$post,
                "page"=>$page,
                "min"=>($request->query->get("m")?$request->query->get("m"):1),
            ]);
        }
        $post=$request->request;
        return $this->render('FadcoBundle:Dossier:search.html.twig',array(
            "active"=>Null,
            "post"=>$post,
            "entities"=>Null,
            "page"=>null,
            ));
    }
    
}
