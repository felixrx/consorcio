

 
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="../css/material.css" rel="stylesheet">
  
  <link rel='stylesheet' href='../css/materialize.min.css'>


      <link rel="stylesheet" href="../css/style2.css">


    

  
</head>



  <body>
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel" style=" border-radius: 4px;
    box-shadow: 0 0 20px #4f9;border-radius: 55px 0px;">
      <form class="login-form" method="post" action="../archivos/sesion.php">
        <div class="row">
        </div>
         <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input class="validate" id="email" name="txtusuario" required="true" type="text">
            <label for="email" data-error="wrong" data-success="right">Usuario</label>
          </div>
        </div>
         <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" name="txtclave">
            <label for="password">Clave</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordarme</label>
          </div>
        </div>
   
          
            <input value="Entrar" class="btn waves-light col s12" type="submit" style="border-radius: 55px 0px;">
         
       
        <div class="row">
          <div class="input-field col s6 m6 l6">
            
          </div>
          <div class="input-field col s6 m6 l6">
             
          </div>          
        </div>

      </form>
    </div>
  </div> </body>
  <script src='../js/angular.min.js'></script>
<script src='../js/jquery.min.js'></script>
<script src='../js/materialize.min.js'></script>

  

    <script  src="./script.js"></script>




</body>

</html>
