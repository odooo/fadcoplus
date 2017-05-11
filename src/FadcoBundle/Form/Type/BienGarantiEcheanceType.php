<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienGarantiEcheanceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', null, array(
                'widget' => 'single_text',
                'format' => 'dd/mm/yyyy',
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Date',
                    'class' => 'datepicker',
                )
            ))
            ->add('montant', null, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'Montant'
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
            'data_class' => 'GSPBundle\Entity\BienGarantiEcheance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_biengarantiecheance';
    }
}
