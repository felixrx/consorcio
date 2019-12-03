<?php

require('js/fpdf/fpdf.php');
include("conexion/conexion2.php");
$conexion=conectar();

class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}
require('../fpdf/fpdf.php');
$mysqli = new mysqli("localhost", "root", "", "consorcio");
function Header()
{
    $this->Image('imagenes/encabezado.jpg' , 15 ,12, 170 , 24,'JPG');
	
	
	
	
	
	
	
	$this->Ln(27);
}

}

	
require('../fpdf/fpdf.php');
$mysqli = new mysqli("localhost", "root", "", "consorcio");

    $num= $_POST['id_c'];


    
	$strConsulta = "SELECT * FROM alumnos join representante join padres on alumnos.id_c = representante.id_c and alumnos.id_c= padres.id_c where alumnos.id_c =  '$num'";
	$alumno = mysql_query($strConsulta);
	$fila = mysql_fetch_array($alumno);
	

		
$pdf=new PDF('P','mm','A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(10,10,10);
	$pdf->Ln(19);




	
$pdf->SetFont('Arial','',12);
	$pdf->Text(15,64, utf8_decode('A.- Datos Personales..') ,0,'J');
	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,72, utf8_decode('C.I.: '.utf8_decode($fila['id_c'])) ,0,'J');
	$pdf->Text(22,72, ('________'),0,'C',0);
	$pdf->Text(38,72, ('Apellidos y Nombres:'.(' ').$fila['ap'].(' ').$fila['nb']),0,'C',0);
	$pdf->Text(68,72, ('________________________________________'),0,'C',0);
	$pdf->Text(140,72, ('Fecha de Nacimiento:'.(' ').$fila['fc_n']),0,'C',0);
	$pdf->Text(172,72, ('_________'),0,'C',0);
	



















$pdf->Output('Comprobante.pdf','D'); 
?>
