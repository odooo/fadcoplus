<?php

namespace FadcoBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use FadcoBundle\Entity\Alerte;

class AlerteListener
{
    public function postPersist(LifecycleEventArgs $args, Symfony\Component\Routing\Router $router,Symfony\Component\Security\Core\SecurityContext $context)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();
    }
}
