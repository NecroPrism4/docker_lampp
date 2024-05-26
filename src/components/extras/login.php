<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ejercicios PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header class="bg-light py-2">
      <!-- place navbar here -->
      <?php include '../navbar.php'; ?>
    </header>
    <main>
    <?php
    /* check if existe un usuario si no para que cree uno */
    include '../../db/connection.php';
    include '../../controllers/auth.php';

    $authController = new AuthController($conexion);

    $exist = $authController->existAtLeastOneUser();

    if ($exist) {
      echo "<div class='container'>
    <h1 class='text-center'>Iniciar Sesión</h1>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <form action='loginAttempt.php' method='post' class='border p-4 mt-4 rounded bg-light'>
                <div class='mb-3'>
                    <label for='username' class='form-label'>Nombre de usuario:</label>
                    <input type='username' id='username' name='username' class='form-control' required>
                </div>
                <div class='mb-3'>
                    <label for='password' class='form-label'>Contraseña:</label>
                    <input type='password' id='password' name='password' class='form-control' required>
                </div>
                <button type='submit' class='btn btn-primary'>Iniciar Sesión</button>
            </form>
        </div>
    </div>
</div>";
    } else {
      echo "
      <div class='container'>
      <br/>
      <div class='alert alert-warning text-center'>No hay usuarios registrados. <span class='text-muted'> Por favor, cree un usuario, para continuar.</span></div>
      <h1 class='text-center'>Crear Usuario</h1>
      <div class='row justify-content-center'>
          <div class='col-md-6'>
              <form action='register.php' method='post' class='border p-4 mt-4 rounded bg-light'>
                  <div class='mb-3'>
                      <label for='username' class='form-label'>Nombre de usuario:</label>
                      <input type='username' id='username' name='username' class='form-control' required>
                  </div>
                  <div class='mb-3'>
                      <label for='password' class='form-label'>Contraseña:</label>
                      <input type='password' id='password' name='password' class='form-control' required>
                  </div>
                  <button type='submit' class='btn btn-primary'>Crear Usuario</button>
              </form>
          </div>
      ";
    }



    ?>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
