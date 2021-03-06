<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar estudiante</title>
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
      <div class="col-md-10 mb-1">
        <div class="container mt-3 px-5">

          <!-- Formulario de registro estudiante -->
          <form
            action="../../Controlador/Registro/estudiante.php"
            class="row px-5"
            method="POST">

            <!-- Datos del estudiante -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Datos del estudiante:</p>
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
                
                value="Mauricio">
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
                
                value="Istúriz">
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
                
                value="2001-05-23">
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
                
                value="1234">
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
                
                value="1234">
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
                
                value="Yktan">
            </div>

            <!-- Datos del representante -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Datos del representante:</p>
            </div>

            <div class="mb-3 col-md-3">
              <label 
                for="nombreRepresentante"
                class="form-label">
                Nombre
              </label>
              <input
                type="text"
                class="form-control"
                id="nombreRepresentante"
                name="nombreRepresentante"
                
                value="Alejandro">
            </div>

            <div class="mb-3 col-md-3">
              <label
                for="apellidoRepresentante"
                class="form-label">
                Apellido
              </label>
              <input
                type="text"
                class="form-control"
                id="apellidoRepresentante"
                name="apellidoRepresentante"
                
                value="Riera">
            </div>

            <div class="mb-3 col-md-3">
              <label
                for="telefonoRepresentante"
                class="form-label">
                Número de teléfono
              </label>
              <input
                type="number"
                class="form-control"
                id="telefonoRepresentante"
                name="telefonoRepresentante"
                
                value="12345">
            </div>

            <div class="mb-3 col-md-3">
              <label 
                for="cedulaRepresentante"
                class="form-label">
                Cédula
              </label>
              <input
                type="number"
                class="form-control"
                id="cedulaRepresentante"
                name="cedulaRepresentante"
                
                value="12345">
            </div>

            <!-- Especialidad -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Especialidad:</p>
            </div>

            <div class="mb-3 col-md-2">
              <input 
                class="form-check-input"
                type="checkbox"
                value="1"
                id="canto"
                name="canto"
                checked>
              <label
                class="form-check-label"
                for="canto">
                Canto
              </label>
            </div>

            <div class="mb-3 col-md-2">
              <input 
                class="form-check-input"
                type="checkbox"
                value="1"
                id="piano"
                name="piano"
                checked>
              <label 
                class="form-check-label"
                for="piano">
                Piano
              </label>
            </div>

            <div class="mb-3 col-md-2">
              <input 
                class="form-check-input"
                type="checkbox"
                value="1"
                id="cuatro"
                name="cuatro"
                checked>
              <label 
                class="form-check-label"
                for="cuatro">
                Cuatro
              </label>
            </div>

            <div class="mb-3 col-md-2">
              <input 
                class="form-check-input"
                type="checkbox"
                value="1"
                id="flautaDulce"
                name="flautaDulce"
                checked>
              <label 
                class="form-check-label" 
                for="flautaDulce">
                Flauta dulce  
              </label>
            </div>

            <!-- Mensualidad -->
            <div class="mt-3 col-md-12">
              <p class="fw-bold form-label fs-4">Mensualidad:</p>
            </div>

            <div class="mb-3 col-md-3">
                <label 
                for="mensualidad"
                class="form-label">
                Monto $:
              </label>
              <input
              
              type="number"
              class="form-control"
              id="mensualidad"
              name="mensualidad"
              
              value="20">
            </div>

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