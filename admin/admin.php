
<?php session_start();

error_reporting(0);

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel Administrador</title>

	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   
  <script src="../js/jquery.min.js"></script>

      
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
  
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">


 <link rel='stylesheet' href='nice-select.css'>

       

    
      
      


</head>
 
<body style="font-family:Arial;
                background:#fff url(../images/bg.png) no-repeat top left;">
<?php



$_POST["descripcion"];



      $conn = mysqli_connect("localhost","root","", "consorcio");

if (isset($_POST["descripcion"]) ){
 echo "
<script type='text/javascript'>

    $(document).ready(function() {
 
Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Registro Exitoso..!',
  showConfirmButton: false,
  timer: 5500
});
history.back();
});




</script>";


    $contador = count($_POST["descripcion"]);

    $ProContador=0;

$query = "INSERT INTO productos (Codigo_Gastos,descripcion,cantidad,precio,subTotal,gran_total,fecha_mes,fecha_a_o,edificio_gastos) VALUES ";

    $queryValue = "";


    for($i=0;$i<$contador;$i++)
     {
      if(!empty($_POST["Codigo_Gastos"]) ||  !empty($_POST["descripcion"][$i]) || !empty($_POST["cantidad"][$i]) || !empty($_POST["precio"][$i]) || !empty($_POST["subTotal"][$i]) || !empty($_POST["gran_total"]) || !empty($_POST["fecha_mes"])  || !empty($_POST["fecha_a_o"]) || !empty($_POST["edificio_gastos"][$i])) {
        $ProContador++;
        if($queryValue!="") { 
          $queryValue .= ",";
        }
        $queryValue .= "('" . $_POST["Codigo_Gastos"] . "','" . $_POST["descripcion"][$i] . "','" . $_POST["cantidad"][$i] . "', '" . $_POST["precio"][$i] . "', '" . $_POST["subTotal"][$i] . "','" . $_POST["gran_total"] . "', '" . $_POST["fecha_mes"] . "' , '" . $_POST["fecha_a_o"] . "', '" . $_POST["edificio_gastos"][$i] . "')";
      
      }
    }

    $sql = $query.$queryValue;
    if($ProContador!=0) {
        $resultadocon = mysqli_query($conn, $sql);

      if(!empty($resultadocon)) $resultado = "";



    }
     
  }
?>

	<div class="col-xs-12">
		   



<div class="row">
        	
        		
        	<div class="col-xs-12"  style="background-color:#26a69a;  padding: 0px; padding-right: 0px; height:4px;box-shadow: 0 0 20px #4f9; ">


<div class="col-xs-10" ></div>


				

<div class="col-xs-2" style="background-color:#26a69a; height:40px;border-radius: 0px 0px 0px 40px;box-shadow: 0 0 20px #4f9; " >
	

	<?php echo "<p style='color:white' class='glyphicon glyphicon-user'>"."  ". $_SESSION['usuario'];?>  <a style="color:white;" href="../archivos/cerrar_sesion.php">Salir</a>
</div>

        	</div>



        </div>

		
	</div>


<div class="container">
	  <div class="title"></div>

<!-- partial -->





	


    <div class="navigation" id="nav">


                
         <div class="item user">
            <img src="../images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                  <a   class="icon"></a>

						 <h2> <a style="text-shadow: 1px 1px 2px  #4f9;">Consorcio</a></h2>
<ul>
	<li style="list-style:none;">

 
				<div id="selector-edificio" style="width: 200px; height: 10px; border-color: red;" >

     

</div>

    <script type="text/javascript">
                $(document).ready(function() {
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/serch_cobranza_mysql/obtener_edificio.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                        	

                  $('#selector-edificio').html(response2).fadeIn();

      	

                  }

            });
                 



                       
                    });

   
             
            </script>


            <script type="text/javascript">

            	  $(document).ready(function() {
            	 $("#selector-edificio").change(function() {


            	 	

            	 		var edis =  $("#selector-edificio select").val();

            		

            		if(edis==2){
            			
            			$("#addnew").modal("show");
            		}

            			else
            			  $.ajax({
            type: "POST",
            url: "../consultas/consultar.php", //Mando a ajaxdatos.php
            data: {codigo_edificios: $("#selector-edificio select").val()}, //La cedula


            success: function(data) {

 					$('#bodymodaldatos').html(data);
 					$("#myModaldatos").modal("show");

            			  }

            	});

                if(edis==3){
                        
                        $("#carga_dpto").modal("show");
                    }

                          if(edis==4){
                        
                        $("#carga_propietrio").modal("show");
                    }

                       

                          if(edis==5){
                        
                        $("#carga_inquilino").modal("show");
                    }




            });
            	 });
            </script>





</li>
</ul>

<br>


 </div>
						



                   
      


				






                  <div class="item shop">
                    <img src="../images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                   <a  style="text-shadow: 1px 1px 2px  #4f9;" href="#addnew" data-toggle="modal" class="icon"></a>
                    <h2> <a style="text-shadow: 1px 1px 2px  #4f9;" href="#addnew_gastos" data-toggle="modal">Gastos</a></h2>
						<ul><li>	<br><br>
                     <h2> <a style="text-shadow: 1px 1px 2px  #4f9;" href="#buscar_gastos" data-toggle="modal"> Consultar Gastos</a></h2>
                 </li>
						</ul>
                </div>


                 <div class="item camera">
                    <img src="../images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#cobranza" data-toggle="modal" class="icon"></a>
                    <h2> <a  style="text-shadow: 1px 1px 2px  #4f9;" href="#cobranza" data-toggle="modal">Cobranzas</a></h2>
                      <ul>
                        <h5><li> <a  href="#consultar_cobranza" data-toggle="modal" ><span class="glyphicon glyphicon glyphicon glyphicon-search"></span>Buscar</a></li></h5>
                    </ul>
                </div>

                 <div class="item fav2">
                    <img src="../images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#consultar_reporte" data-toggle="modal" class="icon"></a>
                    <h2> <a style="text-shadow: 1px 1px 2px  #4f9;" href="#consultar_reporte" data-toggle="modal">Reportes</a></h2>


                </div>



</div>
</div>
</div>


</div>


 <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'199px',
                        'height'    :'199px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
</div>


  
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>

        <script src="../bootstrap/js/bootstrap.min.js"></script>


   

<script  src="./script.js"></script>




       
<div class="container">
    
<div class="row"><div class="col-md-4"><?php include('../modales/AgregarModal_carga_edificio.php'); ?></div></div>




<div class="row"><div class="col-md-4">
<?php include('../consultas/modal_consulta_edificio.php'); ?></div></div>




<div class="row"><div class="col-md-4">
<?php include('../modales/modal_carga_propietario.php'); ?></div></div>




</div>


    
    



<div class="row"><div class="col-md-4">
<?php include('../modales/modal_carga_inquilino.php'); ?></div></div>


<div class="container">
	


<div class="row"><div class="col-md-4">
<?php include('../modales/modal_carga_dpto.php'); ?></div></div>




<div class="container">

 
<div class="row"><div class="col-md-4">
<?php include('../cobranza/add_cobranza/modal_add_cobranza/modal_carga_cobranza.php'); ?></div></div></div>

<div class="container">

 
<div class="row"><div class="col-md-4">
<?php include('../cobranza/serch_cobranza/modal_buscar_cobranza/modal_buscar_cobranza.php'); ?></div></div>


</div>

<div class="container">
<div class="row"><div class="col-md-4">
<?php include('../reportes/reporte_individual/modal_reporte_individual/modal_buscar_reporte.php'); ?></div></div>
</div>
<div class="container">
<div class="row"><div class="col-md-4">
<?php include('../gastos/AgregarModal_gastos.php'); ?></div></div>
</div>

<div class="container">
<div class="row"><div class="col-md-4">
<?php include('../gastos/buscar_Modal_gastos.php'); ?></div></div>
</div>
</div>






<script src='../js/velocity.min.js'></script>
<script src='../js/velocity.ui.min.js'></script>


<script  src="../js/script.js"></script>

<script src='jquery.nice-select.js'></script>
<script src='jquery.nicescroll.min.js'></script>
<script  src="./script.js"></script>



 <style>
            
           
            .title{
                width:548px;
                height:119px;
                position:absolute;
                top:530px;
                left:150px;
                background:transparent url(../images/title.png) no-repeat top left;
            }
            a.back{
                background:transparent url(../images/back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }


        </style>
    </body>




</html>

