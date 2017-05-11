<?php

namespace GSPBundle\Form\Type;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ValidatedBienChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'GSPBundle:Bien',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('Bien')
                    ->leftJoin('Bien.Proprietaire', 'Proprietaire')
                    ->addSelect('Proprietaire')
                    ->where('Bien.valide = 2')
                    ->orWhere('Bien.pourGSP = 1')
                    ->orderBy('Bien.idBien', 'DESC')
                ;
            },
            'choice_label' => function ($bien) {
                return sprintf("%s | appartenant à %s", $bien->getCode(), $bien->getProprietaire()->getName());
            },
            'empty_data' => 'Selectionnez le bien',
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'gsp_validated_bien';
    }
}

