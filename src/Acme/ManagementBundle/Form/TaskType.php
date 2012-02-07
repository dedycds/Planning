<?php

namespace Acme\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date')
            ->add('time_start')
            ->add('time_end')
            ->add('description')
            ->add('project', 'entity', array('class' => 'AcmeManagementBundle:Project', 'property' => 'name'))
            ->add('user', 'entity', array('class' => 'AcmeManagementBundle:User', 'property' => 'username'))
            ->add('status', 'entity', array('class' => 'AcmeManagementBundle:Status', 'property' => 'name'))
            ->add('priority', 'entity', array('class' => 'AcmeManagementBundle:Priority', 'property' => 'name'))
            //->add('project')
            //->add('user')
            //->add('priority')
        ;
    }

    public function getName()
    {
        return 'acme_managementbundle_tasktype';
    }
}
