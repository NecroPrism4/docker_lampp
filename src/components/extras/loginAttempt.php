<?php
session_start();
include '../../db/connection.php';
include '../../controllers/auth.php';

$authController = new AuthController($conexion);

$username = $_POST['username'];
$password = $_POST['password'];

$mensaje = $authController->login($username, $password);

// Verificar si el inicio de sesión fue exitoso
if ($_SESSION['username']) {
    // Redireccionar después de 3 segundos
    header("Refresh: 3; url=registros.php");
    // Almacenar el mensaje de éxito en una variable
    $successMessage = "¡Inicio de sesión exitoso! Redireccionando a registros.php en 3 segundos...";
} else {
    // Mostrar mensaje de error
    $errorMessage = $mensaje;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicios PHP</title>
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
    <main>
       <div class="container">
        <?php if (isset($successMessage)): ?>
                   
                  <div class="alert alert-success text-center">
                      <?php echo $successMessage; ?>
                  </div>       
        <?php endif; ?>
        <?php if (isset($errorMessage)): ?>     
                  <div class="alert alert-danger text-center">
                      <?php echo $errorMessage; ?>
                  </div>
        <?php endif; ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
