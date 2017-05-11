<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            // new AppBundle\AppBundle(),
            new FadcoBundle\FadcoBundle(),
			new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new FOS\UserBundle\FOSUserBundle(),

            # Ajouté par Ignace
//            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            // new winzou\Bundle\StateMachineBundle\winzouStateMachineBundle(),
            // new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            /*
             * Bundles need for android application webservices
             */
            new Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle(),
            // new GSPAppWebserviceBundle\GSPAppWebserviceBundle(),

            //new Slik\DompdfBundle\SlikDompdfBundle(),

            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new LCBundle\LCBundle(),
            
            // new Gos\Bundle\WebSocketBundle\GosWebSocketBundle(),
            new Gos\Bundle\PubSubRouterBundle\GosPubSubRouterBundle(),

            new Lexik\Bundle\CurrencyBundle\LexikCurrencyBundle(),

            /**
             * Bundles required by GSP API
             */
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            // new FOS\OAuthServerBundle\FOSOAuthServerBundle(),
            // new GestionPatrimoineApiBundle\GestionPatrimoineApiBundle(),
//            new StofDoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),

            // Pour les graphes
            new Ob\HighchartsBundle\ObHighchartsBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
