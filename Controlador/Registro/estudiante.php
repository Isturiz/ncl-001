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

    /* datos representante */
    $nombreRepresentante   = $_POST['nombreRepresentante'];
    $apellidoRepresentante = $_POST['apellidoRepresentante'];
    $telefonoRepresentante = $_POST['telefonoRepresentante'];
    $cedulaRepresentante   = $_POST['cedulaRepresentante'];

    /* especialidad */
    $canto       = $_POST['canto'];
    $piano       = $_POST['piano'];
    $cuatro      = $_POST['cuatro'];
    $flautaDulce = $_POST['flautaDulce'];
  
  }
  
  /* require_once '../../Vista/Registro/estudiante.php'; */


  $query = "INSERT INTO estudiante (nombre, apellido, nacimiento, cedula, telefono, direccion, nombreRepresentante, apellidoRepresentante, telefonoRepresentante, cedulaRepresentante, canto, piano, cuatro, flautaDulce) VALUES ('$nombre', '$apellido', '$nacimiento', '$cedula', '$telefono', '$direccion', '$nombreRepresentante', '$apellidoRepresentante', '$telefonoRepresentante', '$cedulaRepresentante', '$canto', '$piano', '$cuatro', '0')";

  $resultado = mysqli_query($conexion, $query);

  if(!$resultado)
  {
    die("Query Failed.");
  }

  header('Location: ../../Vista/Registro/estudiante.php');

  //require_once '../Gestion/estudiante.php'
?>
