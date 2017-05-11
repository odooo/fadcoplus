<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntretienType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descriptionUrgence', null, array(
                'label' => "Description de l'urgence signalée par le propriétaire"
            ))            
            ->add('appreciationPersonnelle', null, array(
                'label' => "Appréciation personnelle sur l'acceptation effective du produit Airbag propriétaire"
            ))
            ->add('appreciationProprietaire', null, array(
                'label' => "Appréciation sur la compréhension et la capacité du propriétaire à se battre pour trouver aussi un preneur de son côté pendant les trois mois"
            ))
            ->add('appreciationClause', null, array(
                'label' => "Appréciation sur l'accord du propriétaire à subir les clauses du contrat à l'issu des trois mois"
            ))
            ->add('avisPersonnel')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Entretien'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_entretien';
    }
}
