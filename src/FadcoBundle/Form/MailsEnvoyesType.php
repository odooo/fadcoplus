<?php

namespace GSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailsEnvoyesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('expediteur')
            ->add('destinataire')
            ->add('objet')
            ->add('contenu')
            ->add('piecejointe')
            ->add('utilisateur')
            ->add('date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\MailsEnvoyes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_mailsenvoyes';
    }
}
