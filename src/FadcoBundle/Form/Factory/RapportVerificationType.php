<?php

namespace GSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RapportVerificationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('verificationsAutorites')
		->add('pieces')
		->add('enqueteProximite')
		 ->add('recommandations')
        ->add('litigExistant')
        ->add('litigeTranche')
         ->add('litigEnCours')
        ->add('preuveJustice')
            
        //->add('avis')
           
        //->add('avisClient')
    
	//->add('avisPrime')
           // ->add('Vente')
       
			->add('submit', 'submit', array('label' => 'Valider', 'attr' => array('class' => 'pull-right btn btn-primary')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSPBundle\Entity\RapportVerification'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gspbundle_rapportverification';
    }
}
