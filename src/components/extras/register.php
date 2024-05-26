<?php
session_start();
include '../../db/connection.php';
include '../../controllers/auth.php';

$authController = new AuthController($conexion);

$username = $_POST['username'];
$password = $_POST['password'];

$registerSuccess = $authController->register($username, $password);

if ($registerSuccess) {
  // Realizar la redirección antes de generar cualquier salida
  header("Refresh: 3; url=login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="alert <?php echo $registerSuccess ? 'alert-success' : 'alert-danger'; ?> text-center">
                    <?php
                    if ($registerSuccess) {
                      echo "¡Usuario registrado exitosamente! Redireccionando al inicio de sesión en 3 segundos...";
                    } else {
                      echo "Error al registrar el usuario. Por favor, inténtalo de nuevo.";
                    }
                    ?>
                </div>
                <?php if (!$registerSuccess): ?>
                          <div class="text-center">
                              <a href="login.php" class="btn btn-primary">Volver al Registro</a>
                          </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
