<?php

namespace Acme\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ManagementBundle\Entity\Priority;
use Acme\ManagementBundle\Form\PriorityType;

/**
 * Priority controller.
 *
 * @Route("/priority")
 */
class PriorityController extends Controller
{
    /**
     * Lists all Priority entities.
     *
     * @Route("/", name="priority")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeManagementBundle:Priority')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Priority entity.
     *
     * @Route("/{id}/show", name="priority_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Priority')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Priority entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Priority entity.
     *
     * @Route("/new", name="priority_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Priority();
        $form   = $this->createForm(new PriorityType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Priority entity.
     *
     * @Route("/create", name="priority_create")
     * @Method("post")
     * @Template("AcmeManagementBundle:Priority:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Priority();
        $request = $this->getRequest();
        $form    = $this->createForm(new PriorityType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('priority_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Priority entity.
     *
     * @Route("/{id}/edit", name="priority_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Priority')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Priority entity.');
        }

        $editForm = $this->createForm(new PriorityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Priority entity.
     *
     * @Route("/{id}/update", name="priority_update")
     * @Method("post")
     * @Template("AcmeManagementBundle:Priority:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Priority')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Priority entity.');
        }

        $editForm   = $this->createForm(new PriorityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('priority_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Priority entity.
     *
     * @Route("/{id}/delete", name="priority_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeManagementBundle:Priority')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Priority entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('priority'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
