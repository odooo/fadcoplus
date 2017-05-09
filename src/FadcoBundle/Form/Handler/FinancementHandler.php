<?php

namespace GSPBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use GSPBundle\Entity\Financement;
use GSPBundle\Form\Type\FinancementType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class FinancementHandler
{
    /**
     * @var GSPBundle\Form\Type\FinancementType
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
            if ($form->isSubmitted()) {
                $financement = $form->getData();
                $financement->setCreatedBy($prestataire);
                $financement->setGuaranteeCode($code);             
                $this->onSuccess($financement);
                return true;
            }
        }

        return false;
    }

    protected function onSuccess(Financement $financement)
    {
        $this->entityManager->persist($financement);
        $this->entityManager->flush();
    }
}

