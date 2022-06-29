<?php

  require_once '../../Modelo/conexion.php';


  $query = "SELECT email FROM usuario";
  $resultado_usuario = mysqli_query($conexion, $query);    


?>