<?php

namespace FadcoBundle\Services;
use FadcoBundle\Controller\RewriteUrlController;

class Datasecure extends \Twig_Extension
{
  // ... les attributs et méthodes qu'on avait déjà définies
  
  // Twig va exécuter cette méthode pour savoir quelle(s) fonction(s) ajoute notre service
  public function getFunctions()
  {
    return array(
      'cryptSrc' => new \Twig_Function_Method($this, 'crypter')
    );
  }
  public function crypter($WebPath,$name=Null,$extension=null){
    $controlerUrl = new RewriteUrlController();
    return $controlerUrl->dataUrl($WebPath,$name=Null,$extension=null);
  }
  
  // La méthode getName() identifie votre extension Twig, elle est obligatoire
  public function getName()
  {
    return 'fadcoplus_Datasecure';
  }
}
