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
  }
}

?>