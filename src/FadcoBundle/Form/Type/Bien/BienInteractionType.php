<?php

namespace GSPBundle\Form\Type\Bien;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienInteractionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet', 'text', array('label' => 'Objet', 'required'=>true))
            ->add('decision', 'textarea', array('label' => 'Décision', 'required'=>true))            
            ->add('resultat', 'textarea', array('label' => 'Résultats', 'required'=>true))
            ->add('statusBien','choice', array(
                'choices' =>array(
                    'Disponible'=>'Bien disponible',
                    'Indisponible'=>'Bien indisponible'
                ),
                  'empty_value' => 'Choisissez le status du bien',
                  'required' => true
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\InteractionProprietaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_bien_interaction';
    }
}
