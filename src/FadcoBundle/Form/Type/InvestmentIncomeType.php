<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvestmentIncomeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recette', null, array(
                'label' => 'Montant de la recette'
            ))
            ->add('benefice', null, array(
                'label' => 'Marge bénéficiaire',
                'read_only' => true,
            ))
            ->add('interets', null, array(
                'label' => 'Montant des intérêts épargnés',
                'read_only' => true,
            ))
            ->add('profits', null, array(
                'label' => 'Montant des profits',
                'read_only' => true,
            ))
            ->add('dime', null, array(
                'label' => 'Dîme des profits',
                'read_only' => true,
            ))
            ->add('profitsNet', null, array(
                'label' => 'Montant net de profit',
                'read_only' => true,
            ))
            ->add('capital', 'hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\InvestmentIncome'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_investmentincome';
    }
}
