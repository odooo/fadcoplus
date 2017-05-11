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
            ->add('prenom','text',array('label' => 'Prenom '))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('ville','text',array('label' => 'Ville ','required' => false))
            ->add('file',"file",array("required"=>false))
            ->add('contact','text',array('label' => 'Contact ','required' => false))
            ->add('type','hidden',[
                'attr' => [
                    'value' => 'distributeur'
                ]
            ])
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
        return 'FadcoBundle_prestataire';
    }
}
