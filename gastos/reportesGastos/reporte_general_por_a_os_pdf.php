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
    
		$this->Cell(152,10,'',0,0,'DF');

$mysqli = new mysqli("localhost", "root", "", "consorcio");

$Codigo_Gastos=$_GET['Codigo_Gastos'];

  $querybuscarh = $mysqli->query("SELECT * FROM productos   where Codigo_Gastos='$Codigo_Gastos'");

$fila=0;


 if (mysqli_num_rows($querybuscarh) > 0 )
    {
            while (($fila=mysqli_fetch_array($querybuscarh)))
                { 


                $fila["Codigo_Gastos"];
                $fila["descripcion"];
             
              $fila["edificio_gastos"];

              $fila["edificio_gastos"];
            $fila["cantidad"];
             $fila["precio"];
             $fila["gran_total"];
             $fila["subTotal"];
              $this->SetY(45);
              $this->SetX(130);
              $this->cell(40,6,utf8_decode('Fecha: '.$fila['fecha_mes']),0,0,'R'); //**
              $this->cell(20,6,utf8_decode(''.$fila['fecha_a_o']),0,0,'L'); //**


              $this->SetY(45);
              $this->SetX(35);
               $this->cell(40,6,utf8_decode('Edificio: '.$fila['edificio_gastos']),0,0,'L'); //**



         }}


		


 //Hacer el salto de linea para la siguiente fila del registro

    
$this->SetY(53);

$this->SetFillColor(38, 166, 154);
$this->SetTextColor(240, 255, 240);
$this->SetFont('Arial','B',12);
   		 $this->Cell(69,6,utf8_decode('Descripcion'),0,0,'C',true);
         $this->Cell(20,6,'Cant.',0,0,'C',true); //ancho,alto,dato,borde,salto,alineacion centrado**
     $this->Cell(25,6,'Precio',0,0,'C',true); //ancho,alto,dato,borde,salto,alineacion centrado**
      $this->Cell(38,6,'Sub-Total',0,0,'C',true); //ancho,alto,dato,borde,salto,alineacion centrado**
 
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

$Codigo_Gastos=$_GET['Codigo_Gastos'];


     





  $querybuscarh = $mysqli->query("SELECT * FROM productos   where Codigo_Gastos='$Codigo_Gastos'");

$fila=0;


 if (mysqli_num_rows($querybuscarh) > 0 )
    {
            while (($fila=mysqli_fetch_array($querybuscarh)))
                { 


                $fila["Codigo_Gastos"];
                $fila["descripcion"];
             
            $fila["cantidad"];
             $fila["precio"];
             $fila["gran_total"];
             $fila["subTotal"];

   


//Ahora mediante un bucle construimos el reporte 
//Pero primero validemos si existen alumnos en ese curso nos cargue los datos
$pdf->Image('baner.jpeg' , 25 ,15, 155 , 25,'JPEG');

$pdf->SetFillColor(38, 166, 154);
$pdf->SetDrawColor(38, 166, 154);

$pdf->RoundedRect(30, 50, 152, 3, 3, '12',true);

   $pdf->Ln();

 $pdf->SetDrawColor(38, 166, 154);
 $pdf->Cell(69,6,utf8_decode($fila['descripcion']),1,0,'C'); //**
  $pdf->Cell(20,6,utf8_decode($fila['cantidad']),1,0,'C'); //**
   $pdf->Cell(25,6,utf8_decode($fila['precio']),1,0,'C'); //**
   $pdf->Cell(38,6,utf8_decode($fila['subTotal']),1,0,'C'); //**



 



 //Hacer el salto de linea para la siguiente fila del registro
 
}
} 
  $Codigo_Gastos=$_GET['Codigo_Gastos'];






  $querybuscarh = $mysqli->query("SELECT DISTINCT gran_total FROM productos  where Codigo_Gastos='$Codigo_Gastos'");

$fila=0;


 if (mysqli_num_rows($querybuscarh) > 0 )
    {
            while (($fila=mysqli_fetch_array($querybuscarh)))
                { 
                
                 $recibo=$fila["gran_total"];
             
            $fila["gran_total"];
             $pdf->SetX(30);
            $pdf->Ln();
          

$pdf->Cell(38,6,utf8_decode(''),0,0,'C'); //**
$pdf->Cell(38,6,utf8_decode(''),0,0,'C'); //**
$pdf->Cell(38,6,utf8_decode('Total: $'),0,0,'R'); //**
$pdf->Cell(38,6,utf8_decode($fila['gran_total']),1,0,'C'); //**
}

}




 


else{
$pdf->Cell(0,10,"No existen registros",0,0,"C");
}
//Ejecutar el pdf en una nueva pestaña y al guardarlo sugiere el nombre de archivo
$pdf->Output('ReporteGeneral'.$Codigo_Gastos.'.pdf','D'); 





?>