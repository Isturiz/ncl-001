<?php

  require_once '../../Modelo/conexion.php';


  if (isset($_POST['registrar']))
  {

    /* datos estudiante */
    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $nacimiento = $_POST['nacimiento'];
    $cedula     = $_POST['cedula'];
    $telefono   = $_POST['telefono'];
    $direccion  = $_POST['direccion'];

    /* salario */
    $salario = $_POST['salario'];

  }

  $query = "INSERT INTO profesor (nombre, apellido, nacimiento, cedula, telefono, direccion, salario) VALUES ('$nombre', '$apellido', '$nacimiento', '$cedula', '$telefono', '$direccion', '$salario')";

  $resultado = mysqli_query($conexion, $query);


  if(!$resultado)
  {
    die("Query Failed.");
  }

  header('Location: ../../Vista/Registro/profesor.php');

?>
