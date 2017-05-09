<?php

namespace GSPBundle\Form\FormFieldsType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DateTimePickerType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DateTime'
        ));
    }
    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'datetimepicker';
    }
}
