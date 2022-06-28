<?php

require_once('../../Modelo/conexion.php');

$email = $_POST['email'];
$clave = $_POST['clave'];




session_start();
$_SESSION['email'] = $email;

$conexion = mysqli_connect("localhost","root","","ncl-001");

$consulta = "SELECT * FROM usuario WHERE email='$email' AND clave='$clave'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if($filas){
  
  header("location: ../../Vista/Sistema/principal.php");

}else{

  header("location: ../../Vista/Sistema/error_autenticacion.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);



?>