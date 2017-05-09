<?php

namespace FadcoBundle\Services;

use Twig_Environment as Environment;

class SmsRenderer
{
    /**
     * @var Twig_Environment
     */
    private $twig;

    /**
     * @var array
     */
    private $smsVars;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function withSmsVars(array $smsVars)
    {
        $this->smsVars = $smsVars;

        return $this;
    }

    public function render($template, $variables)
    {
        $data = array();

        foreach ($variables as $variable) {
            
            switch ($variable) 
            {
                
            }            
        }

        return $this->twig->createTemplate($template)->render($data);
    }
}

