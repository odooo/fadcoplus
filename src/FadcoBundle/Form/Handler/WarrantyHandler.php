<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace GSPBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use GSPBundle\Entity\Warranty;
use GSPBundle\Form\Type\WarrantyType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class WarrantyHandler
{
    /**
     * @var GSPBundle\Form\Type\WarrantyType
     */
    private $form;

    /**
     * @var Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    private $entityManager;

    /**
     * Constructor
     * 
     * @param RequestStack      $requestStack
     * @param ObjectManager     $entityManager
     */
    public function __construct(RequestStack $requestStack, ObjectManager $entityManager)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->entityManager = $entityManager;
    }

    public function process($form, UserInterface $prestataire, $code)
    {
        if ($this->request->isMethod('POST')) {
            $form->handleRequest($this->request);
            if ($form->isSubmitted() && $form->isValid()) {
                $warranty = $form->getData();
                $warranty->setCreatedBy($prestataire);
                //$warranty->setCode($code);
                $warranty->setCreatedAt(new \DateTime());
                $this->onSuccess($warranty);
                return true;
            }
        }
        return false;
    }

    protected function onSuccess(Warranty $warranty)
    {
        $this->entityManager->persist($warranty);
        $this->entityManager->flush();
    }
}