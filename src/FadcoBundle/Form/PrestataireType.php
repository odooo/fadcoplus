<?php

namespace FadcoBundle\Form;

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
            ->add('date',"date",array( 'label'=>'Date de naissance', 'label_attr' =>array( 'class' => 'col-md-2 control-label'),'years' => range( date('Y') - 100, date( 'Y') ),'required' => false))
            ->add('prenom','text',array('label' => 'Prenom '))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('ville','text',array('label' => 'Ville ','required' => false))
            ->add('file',"file",array("required"=>false))
            ->add('contact','text',array('label' => 'Contact ','required' => false))
            ->add('type', 'choice', array('choices' => array('ADMIN' => 'ADMIN', 'DISTRIBUTEUR' => 'DISTRIBUTEUR'), 'required' => true, 'empty_value' => '-- Sélectionner le type de compte --', 'empty_data' => null))
            ->add('agence', 'entity', array(
                'class' => 'FadcoBundle:Agence', 
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
            'data_class' => 'FadcoBundle\Entity\Prestataire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fadcobundle_prestataire';
    }
}
