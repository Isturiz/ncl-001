<?php
  ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pdf</title>
  <link rel="stylesheet" href="../../Recursos/css/bootstrap/bootstrap.css">
</head>
<body>

  <div class="container table">
    <center>
      <h1>Fundación Niños Cantores de Lara</h1>
    </center>
    <h2>Datos estudiantes:</h2>
    <!-- Tabla -->
    <table 
      width="1000px"
      cellpadding="5px" 
      cellspacing="5px" 
      border="1px">

      <thead >
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Nacimiento</th>
          <th>Teléfono</th>
          <th>Dirección</th>

        </tr>
      </thead>
      <tbody>
        
        <?php
        require '../../Controlador/GestionProfesor/profesor.php';
        while($row = mysqli_fetch_assoc($resultado_profesor))
        {
        ?>
        <tr>
          <td> <?php echo $row['nombre'];?> </td>
          <td> <?php echo $row['apellido'];?> </td>
          <td> <?php echo $row['cedula'];?> </td>
          <td> <?php echo $row['nacimiento'];?> </td>
          <td> <?php echo $row['telefono'];?> </td>
          <td> <?php echo $row['direccion'];?> </td>

        <?php
        }
        ?>
      </tbody>

    </table>
  </div>
</body>
</html>



<?php
$html=ob_get_clean(); 
//echo $html;
?>

<?php
require_once '../../Controlador/Reporte/reporte.php';
?>