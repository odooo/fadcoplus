<?php

namespace GSPBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use GSPBundle\Entity\Investment;
use GSPBundle\Entity\InvestmentInterestEcheance;
use GSPBundle\Form\Type\InvestmentType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class InvestmentHandler
{
    /**
     * @var GSPBundle\Form\Type\InvestorType
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
                $investment = $form->getData();
                $investment->setCreatedBy($prestataire);
                $investment->setCode($code);
                if($investment->getId() == null) $this->addPeriode($investment);
                $this->onSuccess($investment);
                return true;
            }
        }

        return false;
    }

    protected function onSuccess(Investment $investment)
    {
        $this->addEcheances($investment);
        $this->entityManager->persist($investment);
        $this->entityManager->flush();
    }
    
    protected function addPeriode(Investment $investment){
        $p = new \GSPBundle\Entity\Periode();
        $p->setDebut(new \DateTime());
        $p->setfin($p->getDebut());
        $p->setType(false);
        $p->setInvestment($investment);
        $investment->addPeriode($p);
        $this->entityManager->persist($p);        
    }

    protected function addEcheances($investment)
    {
        $nextYear = new \DateTime();
        $nextYear->modify('+1 year');

        $investment->addEcheancesInteret($this->createEcheance(clone $nextYear, $investment->getMontant() * 0.2, $investment));

        if ($investment->getType() == Investment::TYPE_LIMITTED) {
            for($i = 1; $i < $investment->getDuration(); $i++) {
                $nextYear->modify('+1 year');
                $investment->addEcheancesInteret($this->createEcheance(
                    clone $nextYear,
                    $investment->getMontant() * 0.2 + ($i == $investment->getDuration() - 1 ? $investment->getMontant() : 0),
                    $investment
                ));
            }
        }
    }

    protected function createEcheance($date, $montant, $investment)
    {
        $echeance = new InvestmentInterestEcheance();
        $echeance->setDate($date);
        $echeance->setMontant($montant);
        $echeance->setEtat(InvestmentInterestEcheance::STATE_WAITING);
        $echeance->setInvestment($investment);
        $echeance->setInvestor($investment->getInvestor());

        return $echeance;
    }
}

