<?php

namespace GSPBundle\Form\Type;

use GSPBundle\Form\Type\BienGarantiEcheanceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienGarantiType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('warranty' , new WarrantyType(), array(
                'label' => false,
            ))
            ->add('motivations', null, array(
                'label' => 'Motivations commerciales d\'achat du bien par investissement',
            ))
            ->add('montant', 'integer', array(
                'label' => 'Montant proposé de cession du bien',
            ))
            ->add('modePaiement', 'choice', array(
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
            ->add('dateVente', 'datetime', array(
                'label' => 'Date prévisionnel de finalisation de la vente',
                'widget' => 'single_text',
                'format' => 'dd/mm/yyyy',
                'attr' => array(
                    'class' => 'datepicker',
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
            'data_class' => 'GSPBundle\Entity\BienGaranti'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_biengaranti';
    }
}
