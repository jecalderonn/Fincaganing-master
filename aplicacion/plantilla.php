<?php
 require 'librerias/fpdf181/fpdf.php';

 /**
  * 
  */
 class Plantilla extends FPDF
 {
 	function Header(){
 		$this->Image('../imagenes/logo.png', 5, 5, 30);
 		$this->Ln(20);
 		$this->SetFont('Arial', 'B', 15);
 		$this->Cell(50);
 		$this->Cell(160, 10, utf8_decode('Información Básica de Animal'), 0, 1, 'C');
 		$this->Ln(10);
 	}

 	function Footer(){
 		$this->SetY(-15);
 		$this->SetFont('Arial', 'B', 8);
 		$this->Cell(0, 20, 'Pagina '.$this->PageNo(), 0, 0, 'R');		
 	}
 }
?>