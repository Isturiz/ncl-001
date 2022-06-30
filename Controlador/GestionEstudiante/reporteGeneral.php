<?php

  require_once '../../Modelo/conexion.php';


  $query = "SELECT * FROM estudiante";
  $resultado_estudiante = mysqli_query($conexion, $query);    


?>