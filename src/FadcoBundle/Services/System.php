<?php

namespace FadcoBundle\Services;

/**
 * Description of System
 *
 * @author AFIDOSS
 */
class System {
    //put your code here
    
    public static function mkDir($dir){
    $arraydir=explode("/",$dir);
    $link=$arraydir[0];
    unset($arraydir[0]);
    foreach($arraydir as $ld){
        $link.="/".$ld;
        if(!is_dir($link)){
            mkdir($link);
        }
    }
    return $link;
}
}
