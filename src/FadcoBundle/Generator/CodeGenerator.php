<?php

namespace GSPBundle\Generator;

use Doctrine\Common\Persistence\ObjectManager;

class CodeGenerator
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    protected $manager;


    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function generateSanctionCode()
    {
        $lastSanctions = $this->manager->getRepository('GSPBundle:Sanctions')
                                ->findBy(array(), array('id' => 'desc'),1,0);
        
        $codeSanction = "S01";

        if (count($lastSanctions) > 0) {
            
            $codeSanction = "S0" . ($lastSanctions[0]->getId() + 1);
        }

        return $codeSanction;
    }

    public function generateDecisionCode()
    {        
        $lastDecisions = $this->manager->getRepository('GSPBundle:Decisions')
                                ->findBy(array(), array('id' => 'desc'),1,0);

        $codeDecision = "DES01";

        if (count($lastDecisions)) {

            $codeDecision = "DES0" . ($lastDecisions[0]->getId() + 1);
        }
        
        return $codeDecision;
    }

    public function generateProcessCode()
    {
        $lastProcess = $this->manager->getRepository('GSPBundle:Process')
                                ->findBy(array(), array('id' => 'desc'),1,0);

        $codeProcess = "PRS01";

        if (count($lastProcess)) {

            $codeProcess = "PSR0" . ($lastProcess[0]->getId() + 1);
        }
        
        return $codeProcess;   
    }
}

