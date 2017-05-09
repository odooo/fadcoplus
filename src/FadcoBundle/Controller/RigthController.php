<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FadcoBundle\Entity\Rigth;
use FadcoBundle\Form\RigthType;

/**
 * Rigth controller.
 *
 */
class RigthController extends Controller
{

    /**
     * Lists all Rigth entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FadcoBundle:Rigth')->findAll();

        return $this->render('FadcoBundle:Rigth:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rigth entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rigth();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rigth', array('id' => $entity->getCodeRigth())));
        }

        return $this->render('FadcoBundle:Rigth:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rigth entity.
     *
     * @param Rigth $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rigth $entity)
    {
        $form = $this->createForm(new RigthType(), $entity, array(
            'action' => $this->generateUrl('rigth_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Rigth entity.
     *
     */
    public function newAction()
    {
        $entity = new Rigth();
        $form   = $this->createCreateForm($entity);

        return $this->render('FadcoBundle:Rigth:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rigth entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Rigth')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rigth entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FadcoBundle:Rigth:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rigth entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Rigth')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rigth entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FadcoBundle:Rigth:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rigth entity.
    *
    * @param Rigth $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rigth $entity)
    {
        $form = $this->createForm(new RigthType(), $entity, array(
            'action' => $this->generateUrl('rigth_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier','attr' => array( 'class' => 'btn btn-info pull-right')));

        return $form;
    }


    /**
     * Edits an existing Rigth entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Rigth')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rigth entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rigth', array('id' => $id)));
        }

        return $this->render('FadcoBundle:Rigth:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Deletes a Rigth entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        
        
        $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FadcoBundle:Rigth')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rigth entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('rigth'));
        
    }

    /**
     * Creates a form to delete a Rigth entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rigth_delete', array('id' => $id)))
            ->setMethod('DELETE')
           ->add('submit', 'submit', array('label' => 'Supprimer','attr' => array( 'class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
