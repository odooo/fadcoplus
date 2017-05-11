<?php

namespace GSPBundle\Form\Type;

use GSPBundle\Form\AddressType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvestorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', null, array(
                'label' => 'Code de l\'investisseur',
                'attr' => array(
                    'disabled' => true
                )
            ))
            ->add('firstname', null, array(
                'label' => 'Prénom de l\'investisseur',
            ))
            ->add('lastname', null, array(
                'label' => 'Nom de l\'investisseur',
            ))
            ->add('contacts', null, array(
                'label' => 'Contacts de l\'investisseur',
            ))
            ->add('contactChannel', null, array(
                'label' => 'Canal de prise de contact',
            ))
            ->add('bankAccountNumber', null, array(
                'label' => 'Numéro du compte bancaire des opérations',
            ))
            ->add('identityPieceFile', 'file', array(
                'label' => 'Pièce d\'identité',
            ))
            ->add('address', new AddressType(), array(
                'label' => 'Adresse de l\'investisseur'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Investor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_investor';
    }
}
