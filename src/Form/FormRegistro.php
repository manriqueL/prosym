<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormRegistro extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $opciones){
        $builder->add('name', TextType::class, array(
            'label' => 'Name'
        ))
        ->add('lastName', TextType::class, array(
            'label' => 'lastName'
        ))
        ->add('Email', EmailType::class, array(
            'label' => 'Email'
        ))
        ->add('password', PasswordType::class, array(
            'label' => 'password'
        ))
        ->add('Register', SubmitType::class, array(
            'label' => 'Register'
        ))
        ;        
        }        
}
    