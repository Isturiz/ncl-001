<?php

require_once '../../Modelo/conexion.php';

$id = '';

/* datos estudiante */
$nombre     = '';
$apellido   = '';
$nacimiento = '';
$cedula     = '';
$telefono   = '';
$direccion  = '';

/* datos representante */
$nombreRepresentante   = '';
$apellidoRepresentante = '';
$telefonoRepresentante = '';
$cedulaRepresentante   = '';

/* especialidad */
$canto       = '';
$piano       = '';
$cuatro      = '';
$flautaDulce = '';

/* mensualidad */
$mensualidad = '';

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $query = "SELECT * FROM estudiante WHERE id=$id";
  $resultado = mysqli_query($conexion, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);

    /* datos estudiante */
    $nombre     = $row['nombre'];
    $apellido   = $row['apellido'];
    $nacimiento = $row['nacimiento'];
    $cedula     = $row['cedula'];
    $telefono   = $row['telefono'];
    $direccion  = $row['direccion'];
    
    /* datos representante */
    $nombreRepresentante   = $row['nombreRepresentante'];
    $apellidoRepresentante = $row['apellidoRepresentante'];
    $telefonoRepresentante = $row['telefonoRepresentante'];
    $cedulaRepresentante   = $row['cedulaRepresentante'];
    
    /* especialidad */
    $canto       = $row['canto'];
    $piano       = $row['piano'];
    $cuatro      = $row['cuatro'];
    $flautaDulce = $row['flautaDulce'];

    /* mensualidad */
    $mensualidad = $row['mensualidad'];
  }
}

if (isset($_POST['editar']))
{

  $id = $_POST['id'];

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

  /* mensualidad */
  $mensualidad = $_POST['mensualidad'];

  $query = "UPDATE estudiante set cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', nacimiento = '$nacimiento', telefono = '$telefono', direccion = '$direccion', nombreRepresentante = '$nombreRepresentante', apellidoRepresentante = '$apellidoRepresentante', telefonoRepresentante = '$telefonoRepresentante', cedulaRepresentante = '$cedulaRepresentante', canto = '$canto', piano = '$piano', cuatro = '$cuatro', mensualidad = '$mensualidad' WHERE id=$id";
  mysqli_query($conexion, $query);
  //$_SESSION['message'] = 'Task Updated Successfully';
  //$_SESSION['message_type'] = 'warning';
  header('Location: ../../Vista/GestionEstudiante/estudiante.php');
}


?>