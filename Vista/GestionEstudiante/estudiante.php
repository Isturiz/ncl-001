<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión: estudiantes </title>
  <!-- Bootstrap local -->
  <link rel="stylesheet" href="../../Recursos/css/bootstrap/bootstrap.css">
  
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

  <!-- Panel superior -->
  <?php require_once('../../Vista/Panel/panel-sup.php'); ?>

  <div class="container-fluid">
    <div class="row">
      
      <!-- Panel izquierdo -->
      <?php require_once('../../Vista/Panel/panel-izq.php'); ?> 

      <!-- Main -->
      <div class="col-md-10">
        <div class="container table-responsive col-md-11 mt-md-3">

          <!-- Buscador -->
          <form class="mt-1 mb-3 col-md-3">
          
            <label
              for="searchTerm" class="fs-5 form-label fw-bold">
              Buscar
            </label>
            <input
              class="form-control"
              id="searchTerm" 
              type="text"
              onkeyup="doSearch()"/>
          </form>

          <!-- Tabla -->
          <table 
            class="table table-bordered table-hover"
            id="datos">

            <thead >
              <tr>
                <th><div style="width: 100px;"></div> Acción</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacimiento</th>
                <th>Teléfono</th>
                <th>Dirección</th>
   
                <th>Nombre&nbsp;representante</th>
                <th>Apellido&nbsp;representante</th>
                <th>Telefono&nbsp;representante</th>
                <th>Cédula&nbsp;representante</th>

                <th>Canto</th>
                <th>Piano</th>
                <th>Cuatro</th>
                <th>Flauta&nbsp;dulce</th>

              </tr>
            </thead>
            <tbody>
              
              <?php
              require_once '../../Controlador/GestionEstudiante/estudiante.php';
              while($row = mysqli_fetch_assoc($resultado_estudiante))
              {
              ?>

              <tr>
                <td>
                  <!-- Botón editar -->
                  <a href="../../Vista/GestionEstudiante/editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                  <i class="far fa-edit"></i>
                  </a>
                  &nbsp;
                  <!-- Botón eliminar -->
                  <a href="../../Controlador/GestionEstudiante/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>

                <td> <?php echo $row['cedula'];?> </td>
                <td> <?php echo $row['nombre'];?> </td>
                <td> <?php echo $row['apellido'];?> </td>
                <td> <?php echo $row['nacimiento'];?> </td>
                <td> <?php echo $row['telefono'];?> </td>
                <td> <?php echo $row['direccion'];?> </td>

                <td> <?php echo $row['nombreRepresentante'];?> </td>
                <td> <?php echo $row['apellidoRepresentante'];?> </td>
                <td> <?php echo $row['telefonoRepresentante'];?> </td>
                <td> <?php echo $row['cedulaRepresentante'];?> </td>

                <td> <?php echo $row['canto'];?> </td>
                <td> <?php echo $row['piano'];?> </td>
                <td> <?php echo $row['cuatro'];?> </td>
                <td> <?php echo $row['flautaDulce'];?> </td>

              </tr>


              <?php
              }
              ?>
              <tr class='noSearch hide'>
                <td colspan="5"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="../../Recursos/js/custom/buscar.js"></script>
  <script src="../../Recursos/js/bootstrap/bootstrap.js"></script>
</body>
</html>