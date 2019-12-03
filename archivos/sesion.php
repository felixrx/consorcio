
<?php
session_start();
include_once('../conexion/conexion.php');

$usuario = $_POST['txtusuario'];
$clave = $_POST['txtclave'];
$nivel_admin = 0;
$nivel_user = 1;

if ( $usuario != '' or $clave != '' )
	{
	// Buscar Datos
	$querybuscar = $mysqli->query("SELECT * FROM usuario where usuario='$usuario' and clave='$clave'");
	while (($fila=mysqli_fetch_array($querybuscar)))
	{
		$usuariobd= $fila['usuario'];
		$clavebd= $fila['clave'];
		$nivelbd= $fila['nivel'];
		$id= $fila['id'];
	}





if( $usuario == $usuariobd && $clave == $clavebd)
	{
		


if( $usuario == $usuariobd && $clave == $clavebd && $nivel_admin== $nivelbd )
	{
		header("Location: ../usuario/usuario.php");
		$_SESSION['autenticado'] = true;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['nivel'] = $nivel_admin;
		$_SESSION['id'] = $id;
		$_SESSION['clave'] = $clave;
		


	}


elseif( $usuario == $usuariobd && $clave == $clavebd && $nivel_user== $nivelbd)
	{
		header("Location: ../admin/admin.php");
		$_SESSION['autenticado'] = true;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['nivel'] = $nivel_user;
		$_SESSION['id'] = $id;
		$_SESSION['clave'] = $clave;
		
	}
	}

else{
		header("Location: ../login/login.php?error=si");
	}

}
?>