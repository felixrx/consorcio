<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	





<script type="text/javascript" src="../js/jquery.min.js"></script>







<script type="text/javascript">

$(document).ready(function() { 


    
    





     //Si se hace click en enviar cedula
        $.ajax({
            type: "POST",
            url: "../consultas/consultar.php", //Mando a ajaxdatos.php
            data: {}, //La cedula
            success: function(data) {

  
              //oculto el modal de cedula
                    $('#bodymodaldatos').html(data);
                    //Inserto los datos en el otro modal que tendrá los datos


};  
 
</script>



<div id="bodymodaldatos">
	


</div>
</body>
</html>