<?php
session_start();
include '../../db/connection.php';
include '../../controllers/users.php';

//Si no existe una sesion activa, redirigir al usuario a la pagina de logi

if (!isset($_SESSION['username'])) {
  header('Refresh: 0; url=login.php');
  exit();
}

$userController = new UserController($conexion);

// Verificar si el formulario de registro ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $userType = $_POST['userType'];


  $userController->addUser($username, $password, $userType);
}

// Consultar usuarios registrados
$result = $userController->getUsers();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registros de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-light py-2">
        <!-- place navbar here -->
        <?php include '../navbar.php'; ?>
    </header>
    <main class="container"> 
      <?php
      echo "<h1 class='text-center'>Bienvenid@, {$_SESSION['username']}</h1>"
        ?>
        <div class="row gap-4">
            <div class="col-md">
               <div class="row row-gap-3">
               <h2 class="text-center">Registrar Nuevo Usuario</h2>
               <a href="logout.php" class="btn btn-primary">Cerrar Sesión</a>
               </div>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="border p-4 mt-4 rounded bg-light">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de usuario:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="userType" class="form-label">Tipo de usuario:</label>
                        <select id="userType" name="userType" class="form-control" required>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                </form>
            </div>
            <div class="col-md">
                <h2 class="text-center">Usuarios Registrados</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de Usuario</th>
                            <th>Tipo de Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                                                                                                              <tr>
                                                                                                                  <td><?php echo $row['id']; ?></td>
                                                                                                                  <td><?php echo $row['username']; ?></td>
                                                                                                                  <td><?php echo $row['userType']; ?></td>
                                                                                                              </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Ir a galeria de imagenes -->
        <div class="text-center mt-4">
            <a href="imagenes.php" class="btn btn-primary">Ir a la Galería de Imágenes</a>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
