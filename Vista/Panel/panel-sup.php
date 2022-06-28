<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">

      <!-- Usuario -->
      <a class="navbar-brand" href="../../Vista/Sistema/principal.php">
        <?php
          session_start();
          echo 'Usuario: '.$_SESSION['email'];
        ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Botón salir -->
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="../../Controlador/Sistema/salir.php">Salir</a>
        </div>
      </div>
    </div>
  </nav>