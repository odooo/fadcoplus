<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GSPBundle\Form\Type\ChargeFixe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of PayerChargeFixeFormType
 *
 * @author crrs
 */
class PayerChargeFixeFormType extends AbstractType {
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('preuve' , 'text', array(
                'label' => "Preuve de paiement",
                'required' => true,
                ))
                ->add('mode' , 'entity', array(
                'label' => "Mode de paiement",
                'required' => true,
                'choice_label' => 'libelleModePaiement',
                'class' => \GSPBundle\Entity\ModePaiement::class,
                'empty_data'=>null,
                'placeholder'=>"-- Choissisez le mode de paiement --",
                'attr'=>array(
                    'class' => "select2"
                )
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Form\DataTransformer\PayerChargeFixeForm',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_payercf';
    }
    
}
