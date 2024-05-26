<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-light py-2">
        <!-- Navbar -->
    </header>
    <main class="container">
        <h2>Resultado de la operación</h2>
        <?php
        // Verificar si se enviaron los datos del formulario
        if (isset($_POST['numero1'], $_POST['numero2'], $_POST['operacion'])) {
          // Obtener los valores del formulario
          $numero1 = $_POST['numero1'];
          $numero2 = $_POST['numero2'];
          $operacion = $_POST['operacion'];

          // Realizar la operación seleccionada
          switch ($operacion) {
            case 'suma':
              $resultado = $numero1 + $numero2;
              echo "<p>La suma de $numero1 y $numero2 es: $resultado</p>";
              break;
            case 'resta':
              $resultado = $numero1 - $numero2;
              echo "<p>La resta de $numero1 y $numero2 es: $resultado</p>";
              break;
            case 'multiplicacion':
              $resultado = $numero1 * $numero2;
              echo "<p>La multiplicación de $numero1 y $numero2 es: $resultado</p>";
              break;
            case 'division':
              if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "<p>La división de $numero1 entre $numero2 es: $resultado</p>";
              } else {
                echo "<p>Error: No se puede dividir entre 0.</p>";
              }
              break;
            default:
              echo "<p>Error: Operación no válida.</p>";
              break;
          }
        } else {
          echo "<p>Error: No se recibieron todos los datos del formulario.</p>";
        }
        ?>
        <a href="index.php" class="btn btn-primary">Volver al formulario</a>
    </main>
    <footer>
        <!-- Pie de página -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
