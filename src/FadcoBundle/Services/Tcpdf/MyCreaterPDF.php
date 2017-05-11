<?php

namespace FadcoBundle\Services\Tcpdf;


require_once('config/tcpdf_config.php');
require_once('TCPDF.php');
class MyCreaterPDF{
    
    private $tcpdf;
    private $css;
    private $Html;
    
    public function __construct(){
        $this->tcpdf = new \FadcoPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $this->css=CSS_BOOSTRAP;
        $this->tcpdf->SetCreator(PDF_CREATOR);
        $this->tcpdf->SetAuthor('Fadco+');
        $this->tcpdf->SetTitle('');
        $this->tcpdf->SetSubject('');
        
        // set default header data
        $this->tcpdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $this->tcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->tcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        
        // set default monospaced font
        $this->tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $this->tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        //$this->tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $this->tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $this->tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'src/tcpdf/exemples/lang/fra.php')) {
            require_once(dirname(__FILE__).'src/tcpdf/exemples/lang/fra.php');
            $this->tcpdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set font
        $this->tcpdf->SetFont('helvetica', '', 10);
        
    }
    /**
     * 
     * @return objet TCPDF
     */
    public function getFadcoPDF(){
        return $this->tcpdf;
    }
    public function newPage($html){
        $this->tcpdf->AddPage();
        if($this->css){
            if(is_file($html)){
                $fullHTML=<<<EOF
                $this->css file_get_contents($html) 
EOF;
            }else{
                $fullHTML=<<<EOF
                $this->css $html
EOF;
            }
        }else{
            if(is_file($html)){
                $fullHTML=file_get_contents($html);
            }else{
                $fullHTML=$html;
            }
        }
        //die($fullHTML);
        //echo $fullHTML;
        // output the HTML content
        $this->tcpdf->writeHTML($fullHTML, true, false, true, false, '');

        
    }
    /**
    * 
    * @param type $array le tableau d'entite a parcourir
    * @param type $rowParameter tableau des fonction d'entités a appelé
    * @param type $header tableau contenant le entête du tableau 
    * @param array $w tableau des dimension du tableau 
    */
    public function DisplayTable($array,$rowParameter,$header,$w){
         $this->tcpdf->DisplayTable($array,$rowParameter,$header,$w);
    }
    
    
    public function outPutPDF($name, $dest='I'){
        $this->tcpdf->lastPage();
        mkdir2($name);
        $this->tcpdf->IncludeJS(JS_BOOSTRAP);
        // ---------------------------------------------------------
        //Close and output PDF document
        $this->tcpdf->Output($name,$dest);

        //============================================================+
        // END OF FILE
        //============================================================+
    }
        
}