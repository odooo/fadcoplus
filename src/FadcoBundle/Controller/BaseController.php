<?php

namespace FadcoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    protected function getEntityManager()
    {
        return $this->getDoctrine()->getManager();
    }
    
    protected function getRepository($entity)
    {
        return $this->getEntityManager()->getRepository($entity);
    }

    public function back()
    {
        $referer = $this->getRequest()->headers->get('referer');

        return $this->redirect($referer);
    }

    /*** CAS DES MAILS
     *  Test si la session existe toujours,
     *  sinon le renvoyer vers la page de DashBord
     */
    public function hasMailSession(){
        // récupérer la session
        $userMail =  $this->get('session')->get('userMail');
        $userPassword =  $this->get('session')->get('userPassword');

        if(!isset($userMail) or !isset($userPassword)){
            return 0;
        }

        return 1;
    }

    public function mailCredentials()
    {
        return array(
            $this->get('session')->get('userMail'),
            $this->get('session')->get('userPassword')
        );
    }
}