<?php

namespace GSPBundle\Form\Type;

use GSPBundle\Entity\Investment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvestmentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', null, array(
                'label' => "Code de l'investissement",
                'attr' => array(
                    'readonly' => true
                )
            ))
            ->add('investor', 'entity', array(
                'label' => 'Investisseur',
                'class' => 'GSPBundle\Entity\Investor',
                'placeholder' => 'Selectionnez un investisseur',
            ))
            ->add('montant', null, array(
                'label' => "Montant de l'investissement",
            ))
            ->add('contrat', 'hidden')
            ->add('protocoleAccord', 'hidden')
            ->add('type', new ChoiceType(), array(
                'choices' => array(
                    0 => "-- Choississez le type d'investisement --",
                    Investment::TYPE_LIMITTED => "Durée déterminée",
                    Investment::TYPE_UNLIMITTED => "Durée indéterminée",
                ),
                'label' => "Type d'investissement",
                // 'choice_attr' => function($key, $val, $index) {
                //                     return ($key == 0) ? ['disabled' => 'disabled'] : [];
                //                 },
            ))
            ->add('duration', 'integer', array(
                'label' => 'Durée de l\'investissement (en nombre d\'année)',
                'required' => false,
                'attr' => array(
                    'min' => 2,
                    'style' => 'display: none',
                ),
                'label_attr' => array(
                    'id' => 'duration-label',
                    'style' => 'display: none',
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
            'data_class' => 'GSPBundle\Entity\Investment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_investment';
    }
}
