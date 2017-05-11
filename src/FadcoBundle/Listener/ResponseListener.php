<?php

namespace FadcoBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Templating\EngineInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class ResponseListener implements EventSubscriberInterface
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    private $entityManager;

    /**
     * @var Symfony\Component\Templating\EngineInterface
     */
    private $templating;


    /**
     * Constructeur
     *
     * @param ObjectManager $entityManager
     * @param EngineInterface $templating
     */
    public function __construct(ObjectManager $entityManager,EngineInterface $templating)
    {
        $this->entityManager = $entityManager;
        $this->templating = $templating;
    }

    public function OnRequest(GetResponseEvent $event)
    {
        $em=$this->entityManager;
        $manager=$em->getRepository('GSPBundle:Manager')->findOneBy(array('id'=>1));
        $request=$event->getRequest();
        $routePath=$request->getPathInfo();
        $routeName=substr($routePath, 1,strlen($routePath));
        $options = [
                'cost' => 11,
                'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
                ];
        $checklock=true;

        if ($manager) {
            
            $Refreshkey=$manager->getRefreshkey();
            
            if($routePath=='/reset')
            {
                $checklock=false;
                $locked_word=$request->query->get('lockedword');
                $unlocked_word=$request->query->get('unlockedword');
                $refresh_key=$request->query->get('refreshkey');
                
                if ($refresh_key && $unlocked_word && $locked_word) {

                    if (password_verify($refresh_key,$Refreshkey)) {

                        if ($unlocked_word==$locked_word) {

                           $event->setResponse(new Response("Les parametres lockedword et unlockedword sont identiques"));

                        }else {
                            $manager->setLockedword(password_hash($locked_word, PASSWORD_BCRYPT, $options));
                            $manager->setUnlockedword(password_hash($unlocked_word, PASSWORD_BCRYPT, $options));
                            $manager->setLockedkey(password_hash($manager->getLockedword(), PASSWORD_BCRYPT, $options));
                            $em->flush($manager);

                            $event->setResponse(new Response("lockedword && unlockedword updated"));
                        }
                        
                    }else {
                        $event->setResponse(new Response("refreshkey is incorrect"));
                    }

                }else {
                    $event->setResponse(new Response("Veuillez renseigner les parametres : refreshkey, unlockedword et lockedword"));
                    
                }

            }
            
            $Lockword=$manager->getLockedword();
            $Unlockword=$manager->getUnlockedword();
            $Lockedkey=$manager->getLockedkey();

            if(password_verify($routeName,$Lockword))
            {
                $manager->setLockedkey(password_hash($Lockword, PASSWORD_BCRYPT, $options));
                $em->flush($manager);
                $event->setResponse(new Response("locked"));
                $event->stopPropagation();
                $checklock=false;

            }elseif (password_verify($routeName,$Unlockword)) {
                $manager->setLockedkey(password_hash($Unlockword, PASSWORD_BCRYPT, $options));
                $em->flush($manager);
                $event->setResponse(new Response("unlocked"));
                $event->stopPropagation();
                $checklock=false;
            }

            if (password_verify($Lockword,$Lockedkey) && $checklock) {
                $event->setResponse(new Response(''));
                $event->stopPropagation();
            }
            
        } 
        
    }


    static public function getSubscribedEvents()
    {
        return array(
            // 'kernel.request'=> array('OnRequest',100000000),
        );
    }
}

