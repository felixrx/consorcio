<?php

require('../fpdf/fpdf.php');
$mysqli = new mysqli("localhost", "root", "", "consorcio");


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

function Header()
{
    
	
	
	
	
$this->
	
	
	$this->Ln(7);
	$this->Text(10,10, utf8_decode('Propietario: ') ,0,'J');
}

}

	$numero_recibo= $_GET['recibo'];	




$mysqli = new mysqli("localhost", "root", "", "consorcio");


  $querybuscarh = $mysqli->query("SELECT * FROM cobranza  where numero_recibo = '$numero_recibo '");

$fila=0;


 if (mysqli_num_rows($querybuscarh) > 0 )
    {
            while (($fila=mysqli_fetch_array($querybuscarh)))
                { 

    
$numero_recibo=$fila['numero_recibo'];
$expensa=$fila['monto'];
$dni_p=$fila['dni_p'];
$paga=$fila['paga'];

$mes=$fila['meses'];




if ($mes==1){$mes="Enero"; };

  if ($mes==2){$mes="Febrero"; };         
if ($mes==3){$mes="Marzo"; };  
if ($mes==4){$mes="Abril"; };  
if ($mes==5){$mes="Mayo"; };  
if ($mes==6){$mes="Junio"; };  
if ($mes==7){$mes="Julio"; };  
if ($mes==8){$mes="Agosto"; };  
if ($mes==9){$mes="Septiembre"; };  
if ($mes==10){$mes="Octubre"; };  
if ($mes==11){$mes="Noviembre"; };  
if ($mes==12){$mes="Diciembre"; };  
 //**
 



$mysqli = new mysqli("localhost", "root", "", "consorcio");

$dni_p=$fila['dni_p'];



  $querybuscarh2 = $mysqli->query("SELECT * FROM propietario  where dni_p = '$dni_p '");
}};
$fila=0;


 if (mysqli_num_rows($querybuscarh2) > 0 )
    {
            while (($fila=mysqli_fetch_array($querybuscarh2)))
                { 


$dni_p=$fila['dni_p'];

$nombre_p=$fila['nombre_p'];
$apellido_p=$fila['apellido_p'];
 //**
 }};
	

		


 $pdf = new FPDF('P', 'mm', array(150,100));
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(10,10,10);
	$pdf->Ln(19);





$pdf->SetXY(1, 1);
$pdf->RoundedRect(5, 5, 140, 90, 3.5, '1234', 'C');



$pdf->Image('baner.jpeg' , 7 ,6, 135 , 25,'JPEG');


	
$pdf->SetFont('Arial','',12);
	

	$pdf->Text(10,40, utf8_decode('Propietario: ') ,0,'J');
	
	$pdf->Text(35,40, utf8_decode(''.utf8_decode($nombre_p).' '.' '.($apellido_p)) ,0,'J');
	$pdf->Text(100,10, utf8_decode('Nº: '.utf8_decode($numero_recibo)) ,0,'J');
	$pdf->Text(10,50, utf8_decode('Mes: '.utf8_decode($mes)) ,0,'J');
	$pdf->Text(10,60, utf8_decode('Status Pagada: '.utf8_decode($paga)) ,0,'J');
	
	$pdf->Text(100,90, utf8_decode('Monto: '.utf8_decode($expensa)) ,0,'J');
	



















$pdf->Output('Comprobante.pdf','D'); 
?>
