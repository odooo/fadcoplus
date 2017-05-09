<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label'         => 'Intitulé de la note',
                'attr'          => array(
                    'class'     => 'form-control',
                ),
                'label_attr'    => array(
                    'class'     => 'control-label',
                ),                
            ))
            ->add('description', null, array(
                'label'         => 'Description de la note',
                'attr'          => array(
                    'class'     => 'form-control',
                ),
                'label_attr'    => array(
                    'class'     => 'control-label',
                ),                
            ))
            ->add('executeAt', null, array(
                'widget'        => 'single_text',
                'format'        => 'dd/MM/yyyy HH:mm',
                'label'         => 'Date d\'exécution',
                'attr'          => array(
                    'class'     => 'form-control datetimepicker',
                ),
                'label_attr'    => array(
                    'class'     => 'control-label',
                ),                
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Task',
            'csrf_protection' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_task';
    }
}
