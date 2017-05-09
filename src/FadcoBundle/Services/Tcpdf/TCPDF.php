<?php

require_once __DIR__.'/src/tcpdf/tcpdf.php';
require_once __DIR__.'/config/tcpdf_config.php';
class FadcoPDF extends TCPDF{
    private $myStyle;
    
    public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.PDF_HEADER_LOGO;
		$this->Image($image_file, 10, 5, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Site
        $this->SetFont('helvetica', 'BU', 10);
        $this->Cell(15, 3, 'URL :', 0, false, 'C', 0, '', 0, false, 'T', 'M');
		$this->SetFont('helvetica', 'I', 8);
        $this->SetTextColorArray(array(41,58,240));
		$this->Cell(35,5,'www.fadcoplus.com', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        //Email
        $this->SetTextColorArray(array(0,0,0));
        $this->SetFont('helvetica', 'B', 10);
        $this->Cell(15,3,'Email :', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->SetTextColorArray(array(41,58,240));
        $this->SetFont('helvetica', 'UI', 8);
        $this->Cell(45,5,'courrier@fadcoplus.com', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        //BP
        $this->SetTextColorArray(array(0,0,0));
        $this->SetFont('helvetica', 'B', 9);
        $this->Cell(55,5,'xx BP : xxx Cotonou, BENIN', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        //number 
        $this->ln();
        $this->SetFont('helvetica', 'B', 8);
        $this->Cell(30,4,'Tel :', 0, false, 'R', 0, '', 0, false, 'T', 'M');
        $this->Cell(60,4,' (229)96983636 , (229) 99 99 99 99 ', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        
        $this->ln();
        $this->Cell(190,4,'DU 15 Juillet 2010 IFU 32012014469 ', 0, 1, 'C', 0, '', 0, false, 'T', 'c');
        $this->myStyle = array('width' => 0.4, 'phase' => 10, 'color' => array(0, 64, 128));
        $this->Line(10,20,200, 20, $this->myStyle);

        
        
        
        
	}
        /**
         * 
         * @param type $array le tableau d'entite a parcourir
         * @param type $rowParameter tableau des fonction d'entités a appelé
         * @return array 
         */
        public function LoadData($array,$rowParameter) {
		// Read file lines
		
		$data = array();
		foreach($array as $line) {
                        $c=\count($data);
                        foreach($rowParameter as $cell){
                            $data[\count($data)][]=$line->$cell;
                        }
                        $data[$c+1]=array();
		}
		return $data;
	}
        /**
         * 
         * @param type $array le tableau d'entite a parcourir
         * @param type $rowParameter tableau des fonction d'entités a appelé
         * @param type $header tableau contenant le entête du tableau 
         * @param array $w tableau des dimension du tableau 
         */
        public function DisplayTable($array,$rowParameter,$header,$w) {
            $this->ColoredTable($header,$this->LoadData($array,$rowParameter),$w);
        }

	/**
         * 
         * @param type $header tableau contenant le entête du tableau 
         * @param type $data   tableau retourné par LoadData()
         * @param array $w tableau des dimension du tableau
         */
	public function ColoredTable($header,$data,$w) {
		// Colors, line width and bold font
		$this->SetFillColor(255, 255,255);
		$this->SetTextColor(0);
		$this->SetDrawColor(0, 0, 0);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		//$w = array(40, 35, 40, 45);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224, 235, 255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
                        for($i = 0; $i < $num_headers; ++$i) {
                            if(is_numeric($row[$i])){
                                $row[$i]=number_format($row[$i]);
                                $align='R';
                            }else{
                                $align='L';
                            }
                            $this->Cell($w[$i], 6,$row[$i], 'LR', 0, $align, $fill);
                        }
			$this->Ln();
			$fill=!$fill;
		}
		$this->Cell(array_sum($w), 0, '', 'T');
	}
    
    
    
    public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
        $this->Line(10,$this->GetY(),200, $this->GetY(), $this->myStyle);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->SetY(-10);
        $this->Cell(0, 10,PDF_FOOTER_STRING, 0, false, 'C', 0, '', 0, false, 'T', 'M');
        
        
	}
}