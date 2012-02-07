<?php

namespace Acme\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('project_category', 'entity', array('class' => 'AcmeManagementBundle:Project_Category', 'property' => 'name'))
            ->add('project_type', 'entity', array('class' => 'AcmeManagementBundle:Project_Type', 'property' => 'name'))
            ->add('user', 'entity', array('class' => 'AcmeManagementBundle:User', 'property' => 'username'))
            ->add('status', 'entity', array('class' => 'AcmeManagementBundle:Status', 'property' => 'name'))
            ->add('priority', 'entity', array('class' => 'AcmeManagementBundle:Priority', 'property' => 'name'))
            ->add('name')
            ->add('start_date')
            ->add('end_date')
            ->add('description')
            ->add('link_google')
            ->add('link_draft')
            //->add('project_category')
            //->add('project_type')
            //->add('user')
            //->add('status')
            //->add('priority')
        ;
    }

    public function getName()
    {
        return 'acme_managementbundle_projecttype';
    }
}
