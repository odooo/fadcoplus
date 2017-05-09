<?php

namespace GSPBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use GSPBundle\Entity\Pret;
use GSPBundle\Form\Type\PretType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class PretHandler
{
    /**
     * @var GSPBundle\Form\Type\PretType
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

    public function process($form, UserInterface $prestataire)
    {
        if ($this->request->isMethod('POST')) {
            $form->handleRequest($this->request);
            if ($form->isSubmitted() && $form->isValid()) {
                $pret = $form->getData();
                $pret->setPrestataire($prestataire);
                $pret->setJuristeTransmissionUrgence('');
                $pret->setPdgTransmissionUrgence('');
                $pret->getRapportEntretien()->setIsValid(true);
                $pret->setCreatedAt(new \DateTime());
                $pret->getWarranty()->setInvestmentRequest($pret);             
                if(!$pret->getEtape()) $pret->setEtape(Pret::ETAPE_NEW);
                $this->onSuccess($pret);
                return true;
            }
        }
        return false;
    }

    protected function onSuccess(Pret $pret)
    {
        $this->entityManager->persist($pret);
        $this->entityManager->flush();
    }
}