<?php

namespace Acme\ManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ManagementBundle\Entity\Project_Category;
use Acme\ManagementBundle\Form\Project_CategoryType;

/**
 * Project_Category controller.
 *
 * @Route("/project_category")
 */
class Project_CategoryController extends Controller
{
    /**
     * Lists all Project_Category entities.
     *
     * @Route("/", name="project_category")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeManagementBundle:Project_Category')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Project_Category entity.
     *
     * @Route("/{id}/show", name="project_category_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Project_Category entity.
     *
     * @Route("/new", name="project_category_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Project_Category();
        $form   = $this->createForm(new Project_CategoryType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Project_Category entity.
     *
     * @Route("/create", name="project_category_create")
     * @Method("post")
     * @Template("AcmeManagementBundle:Project_Category:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Project_Category();
        $request = $this->getRequest();
        $form    = $this->createForm(new Project_CategoryType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_category_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Project_Category entity.
     *
     * @Route("/{id}/edit", name="project_category_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Category entity.');
        }

        $editForm = $this->createForm(new Project_CategoryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Project_Category entity.
     *
     * @Route("/{id}/update", name="project_category_update")
     * @Method("post")
     * @Template("AcmeManagementBundle:Project_Category:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeManagementBundle:Project_Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Project_Category entity.');
        }

        $editForm   = $this->createForm(new Project_CategoryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_category_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Project_Category entity.
     *
     * @Route("/{id}/delete", name="project_category_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeManagementBundle:Project_Category')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Project_Category entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('project_category'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
