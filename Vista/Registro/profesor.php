<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Profesores</title>
  <!-- Bootstrap local -->
  <link rel="stylesheet" href="../../Recursos/css/bootstrap/bootstrap.css">
  
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
        <div class="container mt-3 px-5">

          <!-- Formulario de registro profesor -->
          <form 
            action="../../Controlador/Registro/profesor.php" 
            class="row px-5"
            method="POST">

            <!-- Datos del estudiante -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Datos del profesor:</p>
            </div>

            <div class="mb-3 col-md-3">
              <label 
                for="nombre"
                class="form-label">
                Nombre
              </label>
              <input
                type="text" 
                class="form-control"
                id="nombre"
                name="nombre"
                
                value="Mayra">
            </div>

            <div class="mb-3 col-md-3">
              <label
                for="apellido"
                class="form-label">
                Apellido
              </label>
              <input 
                type="text"
                class="form-control"
                id="apellido"
                name="apellido"
                
                value="Riera">
            </div>

            <div class="mb-3 col-md-3">
              <label 
                for="nacimiento"
                class="form-label">
                Fecha de nacimiento
              </label>
              <input 
                type="date"
                class="form-control"
                id="nacimiento"
                name="nacimiento"
                
                value="1974-05-11">
            </div>

            <div class="mb-3 col-md-3">
              <label
                for="cedula"
                class="form-label">
                Cédula
              </label>
              <input
                type="number"
                class="form-control"
                id="cedula"
                name="cedula"
                
                value="54321">
            </div>

            <div class="mb-3 col-md-3">
              <label 
                for="telefono"
                class="form-label">
                Número de teléfono
              </label>
              <input 
                type="number"
                class="form-control"
                id="telefono"
                name="telefono"
                
                value="12345">
            </div>

            <div class="mb-3 col-md-9">
              <label
                for="direccion"
                class="form-label">
                Dirección
              </label>
              <input
                type="text"
                class="form-control"
                id="direccion"
                name="direccion"
                
                value="Yucatán">
            </div>
            <?php
            /*
            <!-- Salario -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Salario:</p>
            </div>
            
            <div class="mb-3 col-md-3">
              <label 
              for="salario"
              class="form-label">
              Monto $:
            </label>
            <input
            
              type="number"
              class="form-control"
              id="salario"
              name="salario"
              
              value="160">
            </div>
            */  
            ?>
          
            <!-- registrar -->
            <button
              type="submit"
              class="btn btn-success mt-4"
              name="registrar">
              Registrar
            </button>

            <!-- Vaciar todo -->
            <button
              type="reset"
              class="btn btn-danger mt-4">
              Vaciar todo
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../../Recursos/js/bootstrap/bootstrap.js"></script>
</body>
</html>