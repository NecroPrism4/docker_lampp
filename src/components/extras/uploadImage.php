<?php
// Verificar si se ha enviado un archivo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
  $targetDir = "uploads/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);

  //Admintir solo archivos de imagen
  $fileType = $_FILES["image"]["type"];
  if ($fileType != "image/jpeg" && $fileType != "image/png" && $fileType != "image/jpg") {
    $successImage = false;
    die("Solo se permiten archivos de imagen JPG, JPEG y PNG.");
  }

  // Subir la imagen al directorio "uploads"
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    $successImage = true;
  } else {
    $successImage = false;
  }

  // Redirigir al usuario a la página de imágenes
  header("Refresh: 3; url=imagenes.php");
}
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
<!-- div MEssage -->
<?php if (isset($successImage)): ?>
        <div class="alert <?php echo $successImage ? 'alert-success' : 'alert-danger'; ?> text-center">
          <?php echo $successImage ? "¡Imagen subida exitosamente!" : "Error al subir la imagen. Por favor, inténtalo de nuevo."; ?>
        </div>
<?php endif; ?>
      </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


