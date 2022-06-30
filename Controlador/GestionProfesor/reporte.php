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

?>