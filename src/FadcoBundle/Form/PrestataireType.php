<?php

namespace GSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Util\LegacyFormHelper;

class PrestataireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('label' => 'Nom '))
            ->add('datEntre',"date",array( 'label'=>'Date de naissance', 'label_attr' =>array( 'class' => 'col-md-2 control-label'),'years' => range( date('Y') - 100, date( 'Y') ),'required' => false))
            ->add('dateFinMission',"date",array( 'label'=>'Date fin mission', 'label_attr' =>array( 'class' => 'col-md-2 control-label'),'years' => range( date('Y') - 100, date( 'Y') )))
            ->add('prenom','text',array('label' => 'Prenom '))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('personneReference','text',array('label' => 'Personne de  Referennce ','required' => false))
            ->add('contactReference','text',array('label' => 'Contact du reference ','required' => false))
            ->add('ancienneFonction','text',array('label' => 'Ancienne Fonction ','required' => false))
            ->add('ville','text',array('label' => 'Ville ','required' => false))
            ->add('quartier','text',array('label' => 'Quartier ','required' => false))
            ->add('file',"file",array("required"=>false))
            ->add('maison','text',array('label' => 'Maison ','required' => false))
            ->add('contact','text',array('label' => 'Contact ','required' => false))
            ->add('poste','text',array('label' => 'Poste actuel ','required' => false))
            ->add('motiFinMission','text',array('label' => 'Motif fin mission ','required' => false))
            ->add('appreciationGenerale','text',array('label' => 'Appréciation générale','required' => false))
            ->add('appreciationParticuliere','text',array('label' => 'Appréciation particulière','required' => false))
            ->add('typeprestataire', 'choice', array('choices' => array('DG' => 'DG', 'Simple' => 'Simple', 'PDG' => 'PDG', 'Directeur' => 'Directeur'), 'required' => true, 'empty_value' => '-- Sélectionner le type de prestataire --', 'empty_data' => null))
            ->add('categorieprestataire', 'entity', array(
                'class' => 'GSPBundle:CategoriePrestataire', 
                'empty_value' => '-- Sélectionner la catégorie du prestataire --',
                'choice_label' => 'libelleCategorie','required' => false))
            ->add('service', 'entity', array(
                'class' => 'GSPBundle:Service', 
                'empty_value' => '-- Sélectionner le service --',
                'choice_label' => 'codeSev','required' => false))
            ->add('physique', 'entity', array(
                'class' => 'GSPBundle:Physique', 
                'empty_value' => '-- Sélectionner la physique --',
                'choice_label' => 'nom','required' => false))
            ->add('morale', 'entity', array(
                'class' => 'GSPBundle:Morale', 
                'empty_value' => '-- Sélectionner la morale --',
                'choice_label' => 'nom','required' => false))
            ->add('statut', 'entity', array(
                'class' => 'GSPBundle:Statut', 
                'empty_value' => '-- Sélectionner le statut --',
                'choice_label' => 'libelle','required' => false))
            ->add('codeConfidentialite', 'entity', array(
                'class' => 'GSPBundle:CodeConfidentialite', 
                'empty_value' => '-- Sélectionner le code de confidentialité --',
                'choice_label' => 'libelle', 'required' => false))
            ->add('affecteur', 'entity', array(
                'class' => 'GSPBundle:Prestataire', 
                'empty_value' => '-- Sélectionner l\'affecteur --',
                'choice_label' => 'name', 'required' => false))
            ->add('agence', 'entity', array(
                'class' => 'GSPBundle:Agence', 
                'empty_value' => '-- Sélectionner l\'agence du prestataire --',
                'choice_label' => 'libelle', 'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Prestataire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_prestataire';
    }
}
