<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew_gastos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Gastos</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">

   

<!-- Bootstrap core CSS -->

<!-- Custom styles for this template -->

<link href="../gastos/style.css" rel="stylesheet">



<link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="screen"/>

<script src="../js/sweetalert2.js"></script>
 <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>

	<script type="text/javascript" src="../js/jquery.number.js"></script>


 
  <hr>
  <div class="row">

    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
    

<html>
  <head></head>
  <body>





 
 

<div class="col-md-12"  style=" margin-bottom: 5px; background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;  border-radius: 10px 10px 0px 0px;">

<div class="float-left col-heading" > Descripcion</div>
<div class="float-left col-heading2" style=" margin-left:140px; " > Cant.</div>
<div class="float-left col-heading2" style="margin-left: 30px; " > Precio</div>
<div class="float-left col-heading2" style=" margin-left:30px;"> Sub-Total</div>
</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
<div id="div_1">
 <input  style="float: left;width: 44%; margin-left: 5px; margin-top: 5px; " type="text" class="form-control"  name="descripcion[]" id="descri" />
    <input style="float: left;width: 10%;margin-left: 5px;margin-top: 5px; " type="text"  class="form-control" name="cantidad[]" id="cantidad1" />
    <input style="float: left;width: 17%;margin-left: 5px;margin-top: 5px; " type="text" class="form-control" name="precio[]" id="precio1" />
  
    <input style="float: left;width: 18%;margin-left: 5px;margin-top: 5px; " type="text" readonly="true" inputmode="true"  class="form-control" name="subTotal[]" id="subTotal1"  />
    <input class="bt_plus btn btn-primary"  style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;margin-left: 5px;margin-top: 5px;"  id="1" type="button" value="+" />
   
</div>


 <div>
 	
 
<div id="selector-edificios" style="width: 238px; margin-left: 5px; margin-top: 5px;" >

     

</div>

    <script type="text/javascript">
                $(document).ready(function() {
                	
                    
                    $.ajax({
                         type: "POST",
                        url: "../cobranza/serch_cobranza/serch_cobranza_mysql/obtener_edificio_gastos.php", //Mando a ajaxdatos.php
                        
                      
                        success: function(response2) {

                        	

                  $('#selector-edificios').html(response2).fadeIn();

      	

                  }

            });
                 



                       
                    });

   
             
            </script>


 </div>
 <br>

 

 
 
 


<script type="text/javascript">
  $(document).ready(function() {
  //ACA le asigno el evento click a cada boton de la clase bt_plus y llamo a la funcion addField
    $(".bt_plus").each(function (el){
      $(this).bind("click",addField);
                   });
              });
 
 
function addField(){
// ID del elemento div quitandole la palabra "div_" de delante. Pasi asi poder aumentar el número. Esta parte no es necesaria pero yo la utilizaba ya que cada campo de mi formulario tenia un autosuggest , así que dejo como seria por si a alguien le hace falta.
 
var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
 
// Genero el nuevo numero id
var newID = (clickID+1);
 
// Creo un clon del elemento div que contiene los campos de texto
$newClone = $('#div_'+clickID).clone(true);
 
//Le asigno el nuevo numero id
$newClone.attr("id",'div_'+newID);
 
//Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
$newClone.children("input").eq(0).attr("id",'descri'+newID).val('');
$newClone.children("input").eq(1).attr("id",'cantidad'+newID).val('');
 

 $newClone.children("input").eq(2).attr("id",'precio'+newID).val('');

 $newClone.children("input").eq(3).attr("id",'subTotal'+newID).val('');
 $newClone.children("input").eq(4).attr("id",newID);
//Borro el valor del segundo campo input(este caso es el campo de cantidad)
$newClone.children("input").eq(5).val('');
 
//Asigno nuevo id al boton

 
//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));
 
//Cambio el signo "+" por el signo "-" y le quito el evento addfield
$("#"+clickID).val('-').unbind("click",addField);
 
//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);          
 
}
 
 
function delRow() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();
 
}


</script>








<script type="text/javascript">
  
$(document).ready(function(){

    $("input:text[name^=cantidad]").blur(function(){


      $("input:text[name^=cantidad]").number( true ).each(function(){

   cantidad = ($(this).val());
    
      
  
 });

});


 $("input:text[name^=precio]").blur(function(){


$("input:text[name^=precio]").number( true ).each(function(){

  precio = ($(this).val());



 });
 


$("input:text[name^=subTotal]").blur(function(){


var to = ($(this).attr("id"));

cantidad=parseInt(cantidad);
    precio=parseFloat(precio);
  
 subTotal =cantidad*precio;

subTotal=Number(subTotal);
 

$("#"+to).val(subTotal);







 });



 });

  

 

 });
</script>
<script type="text/javascript">
  
$(document).on("blur","input:text[name^=subTotal]",function(){


 $("input:text[name^=subTotal]").blur(function(){
  subTotal = 0
   $("input:text[name^=subTotal]").number( true ).each(function(){
   
 
  subTotal = subTotal + eval($(this).val());



  });
  

  $('#gran_total').number( true ).val(subTotal);
});



});


</script>




<div style=" width: auto; height: 80px;">


<div style="width: 240px;margin-top: 15px; height: 35px; margin-left: 4px; float: left; border: 1px;border-style: solid; border-radius: 3px; border-color: #ddd;"> <p style="font-size: 18px; padding-top: 10px; padding-left: 20px;">Fecha:<?php $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); echo"".$meses[date('n')-1]."  " .date("Y "); ?></p>

<input type="hidden" name="fecha_mes" value="<?php  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); echo"".$meses[date('n')-1] ?>">
<input type="hidden" name="fecha_a_o" value="<?php  echo "".date("Y "); ?>">

<input type="hidden" name="Codigo_Gastos"  id="Codigo_Gastos" value="<?php  echo "". uniqid(); ?>">
 </div>


<div  class="float-right" style=" width: auto; margin-top: 15px; margin-right: 15px; ">

<div style="margin-top: 7px; float: left;">
<label style="align-content: left; ">Total: $</label>
</div>
    <input class="form-control" type="text" id="gran_total" name="gran_total" style="width:110px; float: right; margin-left:"/>
</div>
</div>
<div class="btn-action float-clear" style="">


<div align="right" style="">

 
<div>


<input  class="btn btn-primary" style="background-color: #26a69a;box-shadow: 0 0 20px #4f9; color:white;"  type="submit" name="guardar" id="guardar" value="Guardar Ahora" />



</div>
</div>


</div>

</div>
</form>

  <!-- Fin row --> 

</div>
            </div>

        </div>
    </div>
</div>







<script type="text/javascript">
	
$(document).on("blur","input.precio",function(){


$("input:text[id=pro_cantidad]").blur(function(){
	
  $("input:text[id=pro_cantidad]").each(function(){
   

  pro_cantidad = ($(this).val());




  });
  


});

$("input:text[id=pro_precio]").blur(function(){
	
  $("input:text[id=pro_precio]").each(function(){
   

  pro_precio = ($(this).val());





  });
  
  


});

 
$("input:text[id=pro_total]").blur(function(){
 
pro_precio=parseInt(pro_precio);
    pro_cantidad=parseInt(pro_cantidad);
  
 pro =pro_precio+pro_cantidad;
 



 
	
  $("input:text[id=pro_total]").each(function(){

  	$("input:text[id=pro_total]").val(pro);
  	 alert($(this).attr("id"));

 pro[$(this).attr('id')] = $(this).val();
   
alert(pro);




  


  });
 



});





});


</script>


<script type="text/javascript">
	
$(document).on("blur","input.precio",function(){


$("input:text[id=pro_total]").blur(function(){
	pro_total = 0
  $("input:text[id=pro_total]").each(function(){
   

  pro_total = pro_total + eval($(this).val());




  });
  

  $('#total').val(pro_total);
});



});


</script>











<script>
function AgregarMas() {
    $("<div>").load("../gastos/InputDinamico.php", function() {
            $("#productos").append($(this).html());
    }); 
}
function BorrarRegistro() {
    $('div.lista-producto').each(function(index, item){
        jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
                $(item).remove();
            }
        });
    });
}
</script>

 