<?php

namespace FadcoBundle\Listener;

use Doctrine\Common\Persistence\ObjectManager;

use FadcoBundle\Entity\Prestataire;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginSuccessListener
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user instanceof Prestataire) {
            $expireAt = new \DateTime();
            $expireAt->modify('+1 hour');

            $user->setSessionToken(base64_encode(random_bytes(32)));
            $user->setSessionTokenExpireAt($expireAt);
            
            $this->entityManager->flush();
        }
    }
}