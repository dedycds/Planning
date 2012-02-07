<?php

namespace Acme\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ManagementBundle\Entity\Project_Type;
use Acme\ManagementBundle\Form\Project_TypeType;

/**
 * Project_Type controller.
 *
 * @Route("/project_type")
 */
class Project_TypeController extends Controller
{
    /**
     * Lists all Project_Type entities.
     *
     * @Route("/", name="project_type")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeManagementBundle:Project_Type')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Project_Type entity.
     *
     * @Route("/{id}/show", name="project_type_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Type entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Project_Type entity.
     *
     * @Route("/new", name="project_type_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Project_Type();
        $form   = $this->createForm(new Project_TypeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Project_Type entity.
     *
     * @Route("/create", name="project_type_create")
     * @Method("post")
     * @Template("AcmeManagementBundle:Project_Type:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Project_Type();
        $request = $this->getRequest();
        $form    = $this->createForm(new Project_TypeType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_type_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Project_Type entity.
     *
     * @Route("/{id}/edit", name="project_type_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Type entity.');
        }

        $editForm = $this->createForm(new Project_TypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Project_Type entity.
     *
     * @Route("/{id}/update", name="project_type_update")
     * @Method("post")
     * @Template("AcmeManagementBundle:Project_Type:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Type entity.');
        }

        $editForm   = $this->createForm(new Project_TypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_type_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Project_Type entity.
     *
     * @Route("/{id}/delete", name="project_type_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeManagementBundle:Project_Type')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Project_Type entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('project_type'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
