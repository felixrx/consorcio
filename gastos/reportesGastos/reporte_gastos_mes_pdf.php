<?php
//Incluimos la libreria fpdf
require('fpdf/fpdf.php');
$mysqli = new mysqli("localhost", "root", "", "consorcio");
//Almacenamos el curso que haya elegido en el formulario

 
//creamos una clase para ocupar el encabezado y pie de pagina en el PDF
class PDF extends FPDF
{
//El metodo para crear el encabezado
function Header()


{
  


 
//Encabezado de la tabla
      $this->SetFont('Arial','B',8);


        $this->SetY(60);
		$this->Cell(152,10,'',0,0,'C');

 



$Codigo_Gastos=$_POST['Codigo_Gastos'];

$$querybuscarh="SELECT  *  FROM productos   where Codigo_Gastos='$Codigo_Gastos'";
$result = mysql_query($$querybuscarh)
        or die("Ocurrio un error en la consulta SQL");






	

$fila=0;


 if (mysqli_num_rows($querybuscarh) > 0 )
    {
            while (($fila = mysql_fetch_array($result)) != NULL)
                { 
                $fila["Codigo_Gastos"];
                $fila["descripcion"];
             
            $fila["cantidad"];
             $fila["subTotal"];
 //**
 
 //Hacer el salto de linea para la siguiente fila del registro
 
$this->SetY(55);
        $this->SetFont('Arial','I',12);
		$this->Cell(45,10,'Propietario:'.'     '. '  ');

      $this->SetX(155);
   	 	 $this->Cell(75,10, utf8_decode('Año:'));


        $this->SetY(100);
  $this->SetFont('Arial','I',10);
    
$this->SetY(70);
   		 $this->Cell(38,10,utf8_decode('Recibo Nº'),1,0,'C');
         $this->Cell(38,10,'Meses',1,0,'C'); //ancho,alto,dato,borde,salto,alineacion centrado**
     $this->Cell(38,10,'Monto',1,0,'C'); //ancho,alto,dato,borde,salto,alineacion centrado**
      $this->Cell(38,10,'Paga',1,0,'C'); //ancho,alto,dato,borde,salto,alineacion centrado**
 
}
 
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-30);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
 
    $this->Cell(0,0,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
//ahora instanseamos un objeto de la clase fpdf para empezar a armar el PDF con orientacion vertical, margenes en milimetros y tamaño de papel carta
$pdf = new PDF('P','mm','Letter');
 $pdf->SetMargins(30,10,10);
//Utilizamos el siguiente metodo para cargar una nueva pagina en el PDF
$pdf->AddPage();
$pdf->AliasNbPages();
//Asiganamos el tipo de fuente, el estilo y el tamaño de letra
$pdf->SetFont('Arial','',10);
//Definimos el color de la letra
$pdf->SetTextColor(0x00,0x00,0x00);
 
//generamos la consulta en la siguiente variable
//obtenemos todos los datos de la tabla alumnos segun el curso al que pertenecen

   


//Ahora mediante un bucle construimos el reporte 
//Pero primero validemos si existen alumnos en ese curso nos cargue los datos
$pdf->Image('baner.jpeg' , 25 ,15, 155 , 25,'JPEG');

$pdf->RoundedRect(30, 50, 152, 30, 3, '12', 'C');


   $pdf->Ln();
 
 $pdf->Cell(38,15,utf8_decode("Nº-".$fila['Codigo_Gastos']),1,0,'L'); //**
  $pdf->Cell(38,15,utf8_decode("       "."      "),1,0); //**
   $pdf->Cell(38,15,utf8_decode("   "."           "),1,0); //**
   $pdf->Cell(38,15,utf8_decode("   "."           "),1,0); //**



 //Hacer el salto de linea para la siguiente fila del registro
 
}
}
else{
$pdf->Cell(0,10,"No existen registros",0,0,"C");
}
//Ejecutar el pdf en una nueva pestaña y al guardarlo sugiere el nombre de archivo
$pdf->Output('ReporteGeneral.pdf','D'); 





?>