<?php

  require_once '../../Modelo/conexion.php';

  $query = "SELECT * FROM profesor";
  $resultado_estudiante = mysqli_query($conexion, $query);    

?>