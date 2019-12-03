
 <?php






  
 

      $conn = mysqli_connect("localhost","root","", "consorcio");


 if(isset($_POST['guardar'])) {


    $contador = count($_POST["pro_nombre"]);

    $ProContador=0;

$query = "INSERT INTO productos (Codigo_Gastos,ProNombre,ProCantidad,ProPrecio,pro_total,gran_total,fecha_mes,fecha_a_o) VALUES ";

    $queryValue = "";

    for($i=0;$i<$contador;$i++)
     {
      if(!empty($_POST["Codigo_Gastos"]) ||  !empty($_POST["pro_nombre"][$i]) || !empty($_POST["pro_cantidad"][$i]) || !empty($_POST["pro_precio"][$i]) || !empty($_POST["pro_total"][$i]) || !empty($_POST["gran_total"]) || !empty($_POST["fecha_mes"])  || !empty($_POST["fecha_a_o"])) {
        $ProContador++;
        if($queryValue!="") {
          $queryValue .= ",";
        }
        $queryValue .= "('" . $_POST["Codigo_Gastos"] . "','" . $_POST["pro_nombre"][$i] . "','" . $_POST["pro_cantidad"][$i] . "', '" . $_POST["pro_precio"][$i] . "', '" . $_POST["pro_total"][$i] . "','" . $_POST["gran_total"] . "', '" . $_POST["fecha_mes"] . "' , '" . $_POST["fecha_a_o"] . "')";
      }
    }
    $sql = $query.$queryValue;
    if($ProContador!=0) {
        $resultadocon = mysqli_query($conn, $sql);
      if(!empty($resultadocon)) $resultado = "";

     $mensaje=1;

     
     header('Location: ../gastos/AgregarModal_gastos.php?mensaje=1');
    }
  };
?>

