<?php

  require_once '../../Modelo/conexion.php';

  $query = "SELECT * FROM profesor";
  $resultado_profesor = mysqli_query($conexion, $query);    

?>