<?php
namespace Cpr\SolidBundle\Core\MetaInfo;


class MetaInfo
{

    private $entity; 
    private $original; 


    function __construct($entity){
      $this->entity = new \ReflectionObject($entity);
      $this->original = $entity;
    }
   
   public function getNamespace(){
       
        return  $this->entity->getName();
   }


   public function getClassName(){
       $other = null;
       preg_match('/.+?\\\\(\\w+)$/',$this->getNamespace(),$other);
       return $other[1];
   }


   public function __toString(){
    return $this->getName();
   }


   public function newInstance(){
     
        return  $this->entity->newinstance();
    }


    public function isClass($className){
     
        return  $this->entity->isSubclassOf($class);
    }



    public function getProperties(){
       
      return  $this->entity->getProperties();
    }


    public function getProperty($name){
       
      return  $this->entity->getProperty($name);
    }
   
  
  public function getOriginal(){
    return $this->original; 
  }



  public function invoke($method){
    return $method->invoke($this->original);
  }


  public function getMethods(){
    return $this->entity->getMethods();
  }


  public function getGetters(){
    $list = array();

    foreach($this->getMethods() as $method)
    {
      if(preg_match('/^get/',$method->getName()))
      {
        $list[] = $method();
      }
    }

    return $list;

  }



    
   
}
