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

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $query = "SELECT * FROM profesor WHERE id=$id";
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


  $query = "UPDATE profesor set cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', nacimiento = '$nacimiento', telefono = '$telefono', direccion = '$direccion' WHERE id=$id";
  mysqli_query($conexion, $query);
  //$_SESSION['message'] = 'Task Updated Successfully';
  //$_SESSION['message_type'] = 'warning';
  header('Location: ../../Vista/GestionProfesor/profesor.php');
}


?>