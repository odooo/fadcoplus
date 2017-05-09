<?php

namespace FadcoBundle\Services;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class Fadco
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

    public function getAgences()
    {
        return $this->entityManager->getRepository('FadcoBundle:Agence')->findAll();
    }

    public function uniqueId()
    {
        return md5(uniqid(rand(), true));
    }
}

