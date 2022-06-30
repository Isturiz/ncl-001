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
  <?php
    require_once '../../Controlador/GestionEstudiante/reporte.php';
  ?>

  <div class="container table">

    <center>
      <h1>Fundación Niños Cantores de Lara</h1>
    </center>
    <h2>Datos del estudiante:</h2>

    <table
      width="500px" cellpadding="5px" cellspacing="5px" border="1px"
      class="table table-bordered">
      <thead>

        <tr>
          <th>Mensualidad</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Nacimiento</th>
          <th>cédula</th>
          <th>teléfono</th>
          <th>Dirección</th>
        </tr>
      </thead>
        
      <tbody>
        <tr>
          <td> <?php echo $mensualidad; ?>     </td>
          <td> <?php echo $nombre; ?>     </td>
          <td> <?php echo $apellido; ?>   </td>
          <td> <?php echo $nacimiento; ?> </td>
          <td> <?php echo $cedula; ?>     </td>
          <td> <?php echo $telefono; ?>   </td>
          <td> <?php echo $direccion; ?>  </td> 
        </tr>
      </tbody>
    </table>

    <h2>Datos del representante:</h2>

    <table
      width="500px" cellpadding="5px" cellspacing="5px" border="1px"
      class="table table-bordered">
      <thead>

        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>cédula</th>
          <th>teléfono</th>
        </tr>
      </thead>
        
      <tbody>
        <tr>
          <td> <?php echo $nombreRepresentante; ?>     </td>
          <td> <?php echo $apellidoRepresentante; ?>   </td>
          <td> <?php echo $cedulaRepresentante; ?>     </td>
          <td> <?php echo $telefonoRepresentante; ?>   </td>
        </tr>
      </tbody>
    </table>
    
    <h2>Actividades:</h2>

    <table
      width="500px" cellpadding="5px" cellspacing="5px" border="1px"
      class="table table-bordered">
      <thead>

        <tr>
          <th>Canto</th>
          <th>Piano</th>
          <th>Cuatro</th>
          <th>Flauta Dulce</th>
        </tr>
      </thead>

      <?php
      if ($canto == '1')
      {
        $canto = 'Sí';
      }
      else
      {
        $canto = 'No';
      }

      if ($piano == '1')
      {
        $piano = 'Sí';
      }
      else
      {
        $piano = 'No';
      }

      if ($cuatro == '1')
      {
        $cuatro = 'Sí';
      }
      else
      {
        $cuatro= 'No';
      }

      if ($flautaDulce == '1')
      {
        $flautaDulce = 'Sí';
      }
      else
      {
        $flautaDulce = 'No';
      }
      ?>
        
      <tbody>
        <tr>
          <td> <?php echo $canto; ?>      </td>
          <td> <?php echo $piano; ?>      </td>
          <td> <?php echo $cuatro; ?>     </td>
          <td> <?php echo $flautaDulce; ?></td>
        </tr>
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