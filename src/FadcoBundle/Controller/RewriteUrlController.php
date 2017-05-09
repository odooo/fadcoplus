<?php

namespace FadcoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


/**
 * url
 *
 */
class RewriteUrlController extends Controller
{
    
    
    private $cryptKey;
        
    public function __construct() {
        $this->cryptKey= "afidosstar.smartsorft.leader";
    }

    public  function dataUrlAction($url,$date,$extension){
        @$reelDate = $this->f_decrypt($this->cryptKey,urldecode($date));            
        @$reelUrl=$this->f_decrypt($this->cryptKey.$reelDate, urldecode($url));
        @$reelExtension=$this->f_decrypt($this->cryptKey.$reelDate, urldecode($extension));
        
        $webDir=  __DIR__.'/../../../web/';
        if(is_file($webDir.$reelUrl)){
        $response = new Response(file_get_contents($webDir.$reelUrl));
        $response->headers->set("content-type","image/".$reelExtension);
        return $response;
        }
        return new Response("Le fichier est inexistant");
    }
    
    public  function dataUrl($WebPath,$extension=null){
        if(!$extension){
            $temp = explode(".", $WebPath);
            $extension =  array_pop($temp);
        }
        $a=new \DateTime();
        $date=$a->format("d-m-Y H:i:s");
        $url=urlencode($this->f_crypt($this->cryptKey.$date, $WebPath));
        $extension=urlencode($this->f_crypt($this->cryptKey.$date, $extension));
        $date=urlencode($this->f_crypt($this->cryptKey, $date));
        return [
            "url" => (empty($url)?"not url":$url),
            "extension" => (empty($extension)?"not extension":$extension),
            "date" => (empty($date)?"not date":$date),
        ];
        
        
    }


    private function f_crypt($private_key, $str_to_crypt)
    {
	$private_key = md5($private_key);
	$letter = -1;
	$new_str = '';
	$strlen = strlen($str_to_crypt);

	for ($i = 0; $i < $strlen; $i++) {
		$letter++;
		if ($letter > 31) {
			$letter = 0;
		}
		$neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
		if ($neword > 255) {
			$neword -= 256;
		}
		$new_str .= chr($neword);
	}
	return base64_encode($new_str);
    }
    
    private function f_decrypt($private_key, $str_to_decrypt)
    {
	$private_key = md5($private_key);
	$letter = -1;
	$new_str = '';
	$str_to_decrypt = base64_decode($str_to_decrypt);
	$strlen = strlen($str_to_decrypt);
	for ($i = 0; $i < $strlen; $i++) {
		$letter++;
		if ($letter > 31) {
			$letter = 0;
		}
		$neword = ord($str_to_decrypt{$i}) - ord($private_key{$letter});
		if ($neword < 1) {
			$neword += 256;
		}
		$new_str .= chr($neword);
	}
	return $new_str;
    }
}
