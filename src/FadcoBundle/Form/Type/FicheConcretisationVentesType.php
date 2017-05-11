<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GSPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FicheConcretisationVentesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder        
            ->add('nomClient', 'text', array(
                'label'         => 'Nom du client'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
            ))
            ->add('contactClient', 'text', array(
                'label'         => 'Contact du client'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
            ))
            ->add('birthdayClient', 'text', array(
                'label'         => 'Date de naissance du client'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
            ))
            ->add('emailClient', 'text', array(
                'label'         => 'Adresse e-mail du client'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
            ))
            ->add('visitedProperties', 'entity', array(
                'label'         => 'Biens visités'                
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'class'         => 'GSPBundle:Bien',
                'multiple'      => true,
            ))
            ->add('preferedProperties', 'entity', array(
                'label'         => 'Lequel des biens vitsités vous plait ?'                
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'choices'       => array(),
            ))
            ->add('isPropertyOk', 'choice', array(
                'label'         => 'Ce bien convient il à vos requètes ?'                
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'choices'       => array(
                    'Oui'       => true,
                    'Non'       => false,
                ),
                'expanded'      => true,
            ))
            ->add('paymentDate', 'date', array(
                'label'         => 'Vous payez quand ?'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'widget'        => 'single_text',
                'format'        => 'dd/mm/yyyy',
            ))
            ->add('dislikeReason', 'textarea', array(
                'label'         => 'Nom du client'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                    'placeholder'   => 'Si celui-ci ne vous a pas plu ou convenu, quelles sont les raisons ?',
                )
            ))
            ->add('willVisistOther', 'choice', array(
                'label'         => 'Serez-vous prèts à visiter autres sites de montant supérieur à votre budget actuel ?'                
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'choices'       => array(
                    'Oui'       => true,
                    'Non'       => false,
                ),
                'expanded'      => true,
            ))
            ->add('otherVisitDate', 'date', array(
                'label'         => 'Quand'
                'label_attr'    => array(
                    'class'     => 'control-label'
                ),
                'attr'          => array(
                    'class'         => 'form-control'
                ),
                'widget'        => 'single_text',
                'format'        => 'dd/mm/yyyy',
            ))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }


    public function getName()
    {
        return 'app_user_registration';
    }
}
