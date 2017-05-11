<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('nom','text',array('label' => 'Nom '))
            ->add('contact','text',array('label' => 'Contact Prestataire '))
            ->add('datEntre',"date",array( 'label'=>'Date de naissance:', 'label_attr' =>array( 'class' => 'col-md-2 control-label'),'years' => range( date('Y') - 100, date( 'Y') )))
            
            ->add('prenom','text',array('label' => 'Prenom '))
            ->add('personneReference','text',array('label' => 'Personne de  Referennce '))
            ->add('contactReference','text',array('label' => 'Contact du reference '))
            ->add('ancienneFonction','text',array('label' => 'Ancienne Fonction '))
            ->add('ville','text',array('label' => 'Ville '))
            ->add('quartier','text',array('label' => 'Quartier '))
            ->add('file',"file")
            ->add('maison','text',array('label' => 'Maison '))
            ->add('appreciationGenerale','textarea',array('label' => 'Appreciation Generale'))
            ->add('appreciationParticuliere','textarea',array('label' => 'Appreciation Particulière '))
            ->add('poste','text', array('label' => 'Poste ' ))
            ->add('contactReference','text', array('label' => 'Poste ' ))
            ->add( 'Service', 'entity', array( 'required'=>false,'empty_value'=>'Selectionnez le service','class' => 'GSPBundle:Service', 'property' =>'libelle_sev', 'multiple' => false))
           ->add('typeprestataire', 'choice', array(
                       'empty_value'=>'Selectionnez le type de Pretataire',
                       'required'=>true,
                       'label' => false, 
                       'choices' => array(
                           'Simple'=>'Simple Prestataire',
                           'Directeur' => 'Directeur',
                           'DG' => 'Directeur Genéral',
                           'PDG' => 'PDG'
                       )
                   
               )
           )
            ->add( 'CategoriePrestataire', 'entity', array( 'required'=>false,'empty_value'=>'Selectionnez la catégorie','class' => 'GSPBundle:CategoriePrestataire', 'property' =>'libelleCategorie', 'multiple' => false))
            ->add( 'CodeConfidentialite', 'entity', array( 'empty_value'=>'Selectionnez le code de confidentialité','required'=>false, 'class' => 'GSPBundle:CodeConfidentialite', 'multiple' => false))
            ->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                       'empty_value'=>'Selectionnez le role',
                       'required'=>true,
                       'label' => false, 
                       'choices' => array(
                           'ROLE_USER' => 'Prestataire Simple',
                           'ROLE_PROCEDURE' => 'Gestion des procedures',
                           'ROLE_CONTROLEUR' => 'Contrôleur',
                           'ROLE_GRH' => 'Gestion des Ressources Humaines',
                           'ROLE_ARCHIVE' => 'Gestion de L\'archivage',
                           'ROLE_VENTE' => 'Gestion de la Prise en Charge',
                           'ROLE_SAV' => 'Gestion des Services Apres Vente',
                           'ROLE_ADMIN' => 'Administrateur',
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
