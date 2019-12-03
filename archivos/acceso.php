<?php
session_start();
if(!$_SESSION['autenticado'])
{
	header("Location: ./login/login.php");
}
$inactivo=120;
if(isset($_SESSION['tiempo'])){
	$vida_session=time()-$_SESSION['tiempo'];
	if($vida_session>$inactivo)
{
session_destroy();
header("location: ./login/login.php");
}
}
$_SESSION['tiempo']=time();
?>