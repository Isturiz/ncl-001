<?php

include_once '../../Modelo/conexion.php';

if(isset($_GET['id'])) 
{
  $id = $_GET['id'];
  $query = "DELETE FROM profesor WHERE id = $id";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  //$_SESSION['message'] = 'Task Removed Successfully';
  //$_SESSION['message_type'] = 'danger';

  header('Location: ../../Vista/GestionProfesor/profesor.php');

}

?>