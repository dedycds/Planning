<?php

namespace Acme\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('salt')
            ->add('user_roles')
        ;
    }

    public function getName()
    {
        return 'acme_managementbundle_usertype';
    }
}
