<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType2 extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $passwordType = new PasswordType();
        $textType = new TextType();
        	$builder
           ->add('plainPassword', $passwordType)
           ->add('username', $textType);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
}