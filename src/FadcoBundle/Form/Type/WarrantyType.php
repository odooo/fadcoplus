<?php

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WarrantyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', null, array(
                'label' => "Code garantie",
                'read_only' => true,
                ))
            ->add('bien' , 'gsp_validated_bien', array(
                'label' => "Bien validé associé",
                'required' => true,                
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\Warranty'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_warranty';
    }
}
