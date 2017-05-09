<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FadcoBundle\Entity\Piece;
use FadcoBundle\Form\PieceType;
use FadcoBundle\Entity\Dossier;

/**
 * Piece controller.
 *
 */
class PieceController extends Controller
{

    /**
     * Lists all Piece entities.
     *
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('FadcoBundle:Piece')->findBy(array("Dossier"=>$id));

        return $this->render('FadcoBundle:Piece:index.html.twig', array(
            'entities' => $entities,
            'id'=>$id
        ));
    }

    /**
     * Creates a new Piece entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new Piece();
        $dossier = $this->getDoctrine()
                ->getManager()
                ->getRepository('FadcoBundle:Dossier')
                ->find($id);
        if (!$dossier) {
            throw $this->createNotFoundException('Impossible de trouver le dossier.');
        }
        $entity->setDossier($dossier);
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDate(new \DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archive_dossier_piece', [ 'id' => $id,'id' => $entity->getId()]));
        }

        return $this->render('FadcoBundle:Piece:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'id'=>$id
        ));
    }

    /**
     * Creates a form to create a Piece entity.
     *
     * @param Piece $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Piece $entity,$iDossier)
    {
        $form = $this->createForm(new PieceType(), $entity, array(
            'action' => $this->generateUrl('archive_dossier_piece_create',array("id"=> $id)),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Enregistrer',"attr"=>array("class"=>"btn btn-success    ")));

        return $form;
    }

    /**
     * Displays a form to create a new Piece entity.
     *
     */
    public function newAction($iDossier)
    {
        $entity = new Piece();
        $form   = $this->createCreateForm($entity,$iDossier);
        return $this->render('FadcoBundle:Piece:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'id'=>$id
        ));
    }

    /**
     * Finds and displays a Piece entity.
     *
     */
    public function showAction($id,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Piece')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piece entity.');
        }

        $deleteForm = $this->createDeleteForm($id,$iDossier);

        return $this->render('FadcoBundle:Piece:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Piece entity.
     *
     */
    public function editAction($id,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Piece')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piece entity.');
        }

        $editForm = $this->createEditForm($entity,$iDossier);
        $deleteForm = $this->createDeleteForm($id,$iDossier);

        return $this->render('FadcoBundle:Piece:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'id'=>$id,
            'dossier'=>$id
        ));
    }

    /**
    * Creates a form to edit a Piece entity.
    *
    * @param Piece $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Piece $entity,$id)
    {
        $form = $this->createForm(new PieceType(), $entity, array(
            'action' => $this->generateUrl('archive_dossier_piece_update', array('id' => $id,'id' => $entity->getIdPiece())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Piece entity.
     *
     */
    public function updateAction($id,Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FadcoBundle:Piece')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piece entity.');
        }

        $deleteForm = $this->createDeleteForm($id,$id);
        $editForm = $this->createEditForm($entity,$id);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('archive_dossier_piece_edit', array('id' => $id)));
        }

        return $this->render('FadcoBundle:Piece:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'id'=>$id,
            'dossier'=>$id
        ));
    }
    /**
     * Deletes a Piece entity.
     *
     */
    public function deleteAction($id,Request $request,$id)
    {
        $form = $this->createDeleteForm($id,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FadcoBundle:Piece')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Piece entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('archive_dossier_piece',array("id"=>$id)));
    }

    /**
     * Creates a form to delete a Piece entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id,$id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archive_dossier_piece_delete', array('id' => $id,'id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
