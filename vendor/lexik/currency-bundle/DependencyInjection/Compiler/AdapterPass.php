<?php

namespace Lexik\Bundle\CurrencyBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Yoann Aparici <y.aparici@lexik.fr>
 */
class AdapterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // Attach all adapter to the adapter collector
        $definition = $container->getDefinition('lexik_currency.adapter_collector');

        foreach ($container->findTaggedServiceIds('lexik_currency.adapter') as $id => $attributes) {
            $definition->addMethodCall('add', array(new Reference($id)));
        }
    }
}