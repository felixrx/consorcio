<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cagar cobro</title>




	<script type="text/javascript" src="jquery.min.js"></script>
</head>




<body>



       

<div id="selector-pais">
            propietrio
            <select >
            	
            	<option></option>
            </select>

            <script type="text/javascript">
                $(document).ready(function() {
                    $.ajax({
                            type: "POST",
                            url: "obtener_propietario.php",
                            success: function(response)
                            {

                    

                                $('#selector-pais select').html(response).fadeIn();



                            }
                    });

                });

            </script>
        </div>
 

          


            <div id="selector-departamento">
            Departamento
            <select>
            	
            	<option ></option>
            </select>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#selector-pais select").change(function() {





  			$.ajax({
     	       type: "POST",
            url: "obtener_departamento.php", //Mando a ajaxdatos.php
            
            data: {dni_p:  $("#selector-pais select").val()}, //La cedula
            success: function(response2) {

 			$('#selector-departamento select').html(response2).fadeIn();

 			
            		

          			  }

						});
                       
                       
                    });

                });
            </script>

</div>




 <div  id="selector-expensa">
          <label>Monto de la Expensa</label> 
       <input type="text" id="selector-expensa">     	
            	
     </div>      

        
</script>

 


<script type="text/javascript">
                $(document).ready(function() {
                    $("#selector-departamento select").change(function() {



var  id=  $("#selector-departamento select").val();





$.ajax({
     	       type: "POST",
            url: "obtener_expensa.php", //Mando a ajaxdatos.php
            
            data: {id:  $("#selector-departamento select").val()}, //La cedula
            success: function(response2) {

 		



 			$('#selector-expensa ').html(response2).fadeIn();


            		
	var  ids=  $("#selector-expensa").val();






 $("#cambiame").val(ids);

          			  }

						});
  			
                       
                       
                    });

                });
            </script>










        </div>





    



           <br>
           <br>







           

<label>Mes:</label>
 <select id="mes" class="form-control">
           <option value="">Mes</option>

   			<option value="Enero">Enero</option>
   			<option value="Febrero">Febrero</option>
   			<option value="Marzo">Marzo</option>
   			<option value="Abril">Abril</option>
   			<option value="Mayo">Mayo</option>
   			<option value="Junio">Junio</option>
   			<option value="Julio">Julio</option>
   			<option value="Agosto">Agosto</option>
   			<option value="Septiembre">Septiembre</option>
   			<option value="Octubre">Octubre</option>
   			<option value="Noviembre">Noviembre</option>
   			<option value="Diciembre">Diciembre</option>

           </select>




<br>

<br>


<label>Año</label>

 <select id="a_o" class="form-control">
           <option value="">Año</option>

   			<option value="2019">2019</option>
   			<option value="2020">2020</option>
   			<option value="2021">2021</option>
   			

           </select>



<br>

<select id="pago" class="form-control">
           <option value="">Pago</option>

   			<option value="Si">Si</option>
   			<option value="No">No</option>
   			

           </select>

    </div>




</div>
</div>

</form>





	
</body>
</html>