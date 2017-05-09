<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FadcoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('nom','text',array('label' => 'Nom '))
            ->add('contact','text',array('label' => 'Contact Prestataire '))
            ->add('date',"date",array( 'label'=>'Date de naissance:', 'label_attr' =>array( 'class' => 'col-md-2 control-label'),'years' => range( date('Y') - 100, date( 'Y') )))
            ->add('prenom','text',array('label' => 'Prenom '))
            ->add('ville','text',array('label' => 'Ville '))
            ->add('file',"file")
            ->add('type', 'choice', array(
                       'empty_value'=>'Selectionnez le type de compte',
                       'required'=>true,
                       'label' => false, 
                       'choices' => array(
                           'ADMIN'=>'ADMIN',
                           'DISTRIBUTEUR' => 'DISTRIBUTEUR'
                       )
                   
               )
           )
            ->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                       'empty_value'=>'Selectionnez le type de compte',
                       'required'=>true,
                       'label' => false, 
                       'choices' => array(
                           'ROLE_ADMIN' => 'ADMIN',
                           'ROLE_DISTRIBUTEUR' => 'DISTRIBUTEUR',
                       )
                   )
               )
           )




        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }


    public function getName()
    {
        return 'app_user_registration';
    }
}
