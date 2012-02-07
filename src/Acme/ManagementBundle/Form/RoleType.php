<?php

namespace Acme\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('create_at')
        ;
    }

    public function getName()
    {
        return 'acme_managementbundle_roletype';
    }
}
