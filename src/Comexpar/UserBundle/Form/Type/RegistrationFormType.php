<?php

namespace Comexpar\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder 
            ->add('nom')
            ->add('prenoms')
            ->add('datNaissance')
            ->add('cashpoint')
            ->add('telephone')
             ->add('email')
             ->add('username') 
             ->add('datrecrutement')  
             ->add('fonction')           
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'comexpar_user_registration';
    }
}