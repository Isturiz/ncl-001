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
          <th>Mensualidad</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Nacimiento</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Canto</th>
          <th>Piano</th>
          <th>Cuatro</th>
          <th>Flauta Dulce</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        require '../../Controlador/GestionEstudiante/estudiante.php';
        while($row = mysqli_fetch_assoc($resultado_estudiante))
        {
        ?>
        <tr>
          <td> <?php echo $row['mensualidad'];?> </td>
          <td> <?php echo $row['nombre'];?> </td>
          <td> <?php echo $row['apellido'];?> </td>
          <td> <?php echo $row['cedula'];?> </td>
          <td> <?php echo $row['nacimiento'];?> </td>
          <td> <?php echo $row['telefono'];?> </td>
          <td> <?php echo $row['direccion'];?> </td>

          <?php
            if ($row['canto'] == '1')
            {
              $canto = 'Sí';
            }
            else
            {
              $canto = 'No';
            }
        
            if ($row['piano'] == '1')
            {
              $piano = 'Sí';
            }
            else
            {
              $piano = 'No';
            }
        
            if ($row['cuatro'] == '1')
            {
              $cuatro = 'Sí';
            }
            else
            {
              $cuatro= 'No';
            }
        
            if ($row['flautaDulce'] == '1')
            {
              $flautaDulce = 'Sí';
            }
            else
            {
              $flautaDulce = 'No';
            }
          ?>

          <td> <?php echo $canto;?> </td>
          <td> <?php echo $piano;?> </td>
          <td> <?php echo $cuatro;?> </td>
          <td> <?php echo $flautaDulce;?> </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <h2>Datos representantes:</h2>
    <!-- Tabla -->
    <table 
      width="500px"
      cellpadding="5px" 
      cellspacing="5px" 
      border="1px">

      <thead >
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Teléfono</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        require '../../Controlador/GestionEstudiante/estudiante.php';
        while($row = mysqli_fetch_assoc($resultado_estudiante))
        {
        ?>
        <tr>
          <td> <?php echo $row['nombreRepresentante'];?> </td>
          <td> <?php echo $row['apellidoRepresentante'];?> </td>
          <td> <?php echo $row['cedulaRepresentante'];?> </td>
          <td> <?php echo $row['telefonoRepresentante'];?> </td>
        </tr>
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