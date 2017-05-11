<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienGarantiValidationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observationDg', null, array(
                'label' => 'Observations',
            ))
            ->add('montantDg', 'integer', array(
                'label' => 'Montant du bien validé',
            ))
            ->add('modePaiementDg', 'choice', array(
                'label' => 'Mode de paiement négocié',
                'choices' => array('cach' => 'Cash', 'progressif' => 'Progressif')
            ))
            ->add('accompte', null, array(
                'label' => 'Accompte',
                'required' => false
            ))
            ->add('nbEcheance', 'integer', array(
                'label' => 'Nombre d\'échéances',
                'required' => false
            ))
            ->add('echeances', 'collection', array(
                'type' => new BienGarantiEcheanceType(),
                'allow_add' => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'label' => 'Échéancier de paiement',
                'required' => false
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\BienGaranti'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_biengarantivalidation';
    }
}
