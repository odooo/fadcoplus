<?php

namespace FadcoBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class TinyMceFicheVariableExtension extends \Twig_Extension
{    
    /**
     * @var ContainerInterface $container Container interface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            'init_fiche_variables'  => new \Twig_SimpleFunction(
                'init_fiche_variables',
                array($this, 'initFicheVariables'),
                array('is_safe' => array('html'))
            ),
        );
    }

    public function getName()
    {
        return 'tinymce_fiche_variable_extension';
    }
}

