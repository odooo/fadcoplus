<?php

namespace FadcoBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use FadcoBundle\Entity\Visiteurs;

class GenerateCodeListener
{
    public function prePersist(LifecycleEventArgs $args)
    {

        $entity = $args->getEntity();

        $em = $args->getEntityManager();

    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        // Test if code is not null
        $entity = $args->getEntity();

        $em = $args->getEntityManager();

    }

    private function RandomString($length)
    {

        $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

        $key = "";
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[mt_rand(0, count($keys) - 1)];
        }
        return $key;
    }
}