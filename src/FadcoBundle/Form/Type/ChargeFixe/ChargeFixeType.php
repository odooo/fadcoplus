<?php

namespace GSPBundle\Form\Type\ChargeFixe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChargeFixeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeCharge' , 'entity', array(
                'label' => "Type de charge",
                'required' => true,
                'choice_label' => 'libelle',
                'class' => \GSPBundle\Entity\TypeChargeFixe::class,
                'empty_data'=>null,
                'placeholder'=>"-- Choissisez un type de charge --",
                'attr'=>array(
                    'class' => "select2"
                )
                ))
                ->add('typeBeneficiaire' , 'choice', array(
                'label' => "Type de béneficiaire",
                'required' => true,
                'choices' => array(
                    \GSPBundle\Entity\Prestataire::class => "Prestataire",
                    \GSPBundle\Entity\Proprietaire::class => "Propriétaire",
                    \GSPBundle\Entity\PrestataireExterne::class => "Prestataire Externe",
                    \GSPBundle\Entity\Investisseur::class => "Investisseur",
                ),
                'empty_data' => null,
                'attr'=>array(
                    'onchange'=>'onTypeBeneficiaireChange(this)'
                ),
                'placeholder' => "--Choisissez le type de bénéficiaire--"
                ));
        
        if($options["tb"]){
            $builder->add('beneficiaireEntity' , "entity", array(
                'label' => "Bénéficiaire",
                'class' => $options["tb"],
                'required' => true,
                'empty_data'=>null,
                'placeholder'=>"-- Choissisez un bénéficiaire --",
                'attr'=>array(
                    'class' => "select2"
                )
                ));
        }
        
        $builder->add('montant' , null, array(
                'label' => "Montant de la charge",
                'required' => true,
                ))
            
            ->add('dateEcheance', "datetime", array(
                'widget' => "single_text",
                'format' => "dd/mm/yyyy",
                'label' => "Echéance (Ex: 02/15/2017)",
                "attr" => array(
                            "placeholder" => "02/15/2017",
                            "class" => "datepicker"
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
            'data_class' => 'GSPBundle\Entity\ChargeFixe',
            'tb'=>null,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_chargefixe';
    }
}
