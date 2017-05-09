<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PretType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('warranty' , new WarrantyType(), array(
                'label' => "Garranties prise en charge",
                'required' => true,
                /*'query_builder' => function (\GSPBundle\Entity\WarrantyRepository $er) {
                                        return $er->createQueryBuilder('w')
                                                ->where('w.investmentRequest IS NULL');
                                    },*/
                 'attr' => array( 'class' => 'well'),
                ))
            ->add('montant' , 'number', array(
                'label' => "Montant du prêt",
                'required' => true
                ))
            ->add('echeance', "datetime", array(
                'widget' => "single_text",
                'format' => "dd/mm/yyyy",
                'label' => "Echéance du prêt (Ex: 02/15/2017)",
                "attr" => array(
                            "placeholder" => "02/15/2017",
                            "class" => "datepicker"
                            )
                ))
            ->add("rapportEntretien", new EntretienType(), array(
                'label' => "Rapport d'entretien",
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Pret'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_pret';
    }
}
