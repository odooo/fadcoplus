<?php

namespace FadcoBundle\Services;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class MenuCounters
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    private $entityManager;

    /**
     * @var Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * Constructeur
     */
    public function __construct(ObjectManager $entityManager, TokenStorageInterface $tokenStorage)
    {   
        $this->entityManager = $entityManager;
        $this->tokenStorage = $tokenStorage;
    }

    public function getUser()
    {
        return $this->tokenStorage->getToken()->getUser();
    }  

    public function countPrestataire() 
    {
        return $this->entityManager
            ->getRepository('FadcoBundle:Alerte')
            ->count(array(
                'Destinataire'  => $this->getUser(),
                'etat_alerte'   => array('non lue', 'non lu'),
                array('lien_alerte', 'like', '/prestataire')
            ));
    }
}