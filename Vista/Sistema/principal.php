<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NCL 001</title>
  <!-- Bootstrap local -->
  <link rel="stylesheet" href="../../Recursos/css/bootstrap/bootstrap.css">
  
</head>
<body>

  <!-- Panel superior -->
  <?php require_once('../Panel/panel-sup.php'); ?>

  <!-- Panel izquierdo -->
  <div class="container-fluid">
    <div class="row">
      <?php require_once('../Panel/panel-izq.php'); ?> 
      <div class="col-md-10 col-sm-2">
            <p>MENSAJE DE BIENVENIDA</p>
      </div>
    </div>
  </div>

  <script src="../../Recursos/js/bootstrap/bootstrap.js"></script>
</body>
</html>