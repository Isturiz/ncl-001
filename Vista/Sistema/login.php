<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NCL 001</title>
  <!-- Bootstrap local -->
  <link rel="stylesheet" href="Recursos/css/bootstrap/bootstrap.css">
  
</head>
<body>

  <section>
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-7 col-md-6 m-auto">
          <div class="card border-0 shadow">
            <div class="card-body text-center">
              <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>

              <!-- Formulario login -->
              <form action="Controlador/Sistema/login.php" method="POST">

                <input type="text" name="email" class="form-control my-4 py-2" placeholder="Email" />

                <input type="password" name="clave" class="form-control my-4 py-2" placeholder="Clave" />
                
                <div class="text-center mt-3">
                  <button class="btn btn-primary">Iniciar sesión</button>
                  <a href="#" class="nav-link mt-3">Registrar</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>