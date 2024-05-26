<!DOCTYPE html>
<html lang="es">
<head>
    <title>Galería de Imágenes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header class="bg-light py-2">
        <!-- place navbar here -->
        <?php include '../navbar.php'; ?>
    </header>
    <main class="container">
        <h1 class="text-center">Galería de Imágenes</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- Formulario de carga de imágenes -->
                <form action="uploadImage.php" method="post" enctype="multipart/form-data" class="mb-4">
                    <div class="mb-3">
                        <label for="image" class="form-label">Seleccionar imagen:</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir Imagen</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- Galería de imágenes -->
                <!-- Carousel de Bootstrap -->
                <div id="carouselExampleIndicators" class="carousel slide mx-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        // Obtener la lista de imágenes en la carpeta "uploads"
                        $dir = "uploads/";
                        $files = array_diff(scandir($dir), array('.', '..'));

                        // Generar los elementos del carousel con las imágenes
                        $i = 0;
                        foreach ($files as $file) {
                          $active = $i == 0 ? 'active' : ''; // Marcar la primera imagen como activa
                          echo "<div class='carousel-item $active'>";
                          echo "<img src='$dir$file' class='d-block w-100' alt='Imagen $i'>";
                          echo "</div>";
                          $i++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Volver al registro -->
            <div class="col-md-6 offset-md-3 mt-4">
                <a href="registros.php" class="btn btn-primary">Volver al Registro</a>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
