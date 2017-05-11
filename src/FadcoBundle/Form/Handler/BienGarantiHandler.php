<?php

namespace GSPBundle\Form\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use GSPBundle\Entity\BienGaranti;
use GSPBundle\Namer\UploadedFileNamer;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class BienGarantiHandler
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
     * @var GSPBundle\Namer\UploadedFileNamer
     */
    private $fileNamer;

    /**
     * @var string
     */
    private $piecesPath;

    /**
     * Constructor
     * 
     * @param RequestStack      $requestStack
     * @param ObjectManager     $entityManager
     * @param UploadedFileNamer $fileNamer    
     * @param string            $piecesPath   
     */
    public function __construct(RequestStack $requestStack, ObjectManager $entityManager, UploadedFileNamer $fileNamer, $piecesPath)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->entityManager = $entityManager;
        $this->fileNamer = $fileNamer;
        $this->piecesPath = $piecesPath;
    }

    public function process($form, UserInterface $prestataire, $code)
    {
        if ($this->request->isMethod('POST')) {
            $form->handleRequest($this->request);
            if ($form->isSubmitted() && $form->isValid()) {
                $bienGaranti = $form->getData();
                $bienGaranti->getWarranty()->setCreatedBy($prestataire);
                $bienGaranti->setCreatedBy($prestataire);
                /*$investor->setCode($code);

                $filename = $this->fileNamer->name($investor->getIdentityPieceFile());

                $investor->getIdentityPieceFile()->move(
                    $this->piecesPath, 
                    $filename
                );

                $investor->setIdentityPiece($filename);*/

                $this->onSuccess($bienGaranti);

                return true;
            }
        }

        return false;
    }

    protected function onSuccess(BienGaranti $bienGaranti)
    {
        $this->entityManager->persist($bienGaranti);
        $this->entityManager->flush();
    }
}

