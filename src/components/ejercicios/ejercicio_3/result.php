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
        <h2>Ejercicio 3. Piedra papel o tijera</h2>
        <?php
        // Verificar si se enviaron los datos del formulario de piedra papel o tijera
        if (isset($_POST['jugador'])) {
          // Obtener los valores del formulario
          $jugador = $_POST['jugador'];

          // Elegir una opción aleatoria para el bot
          $opciones = ['piedra', 'papel', 'tijeras'];
          $botChoice = $opciones[array_rand($opciones)];

          // Imprimir los resultados
          switch ($jugador) {
            case 'piedra':
              if ($botChoice == 'piedra') {
                echo '<p>Empate: Ambos eligieron piedra.</p>';
              } elseif ($botChoice == 'papel') {
                echo '<p>Perdiste: El bot eligió papel.</p>';
              } else {
                echo '<p>Ganaste: El bot eligió tijeras.</p>';
              }
              break;

            case 'papel':
              if ($botChoice == 'piedra') {
                echo '<p>Ganaste: El bot eligió piedra.</p>';
              } elseif ($botChoice == 'papel') {
                echo '<p>Empate: Ambos eligieron papel.</p>';
              } else {
                echo '<p>Perdiste: El bot eligió tijeras.</p>';
              }

              break;

            case 'tijeras':
              if ($botChoice == 'piedra') {
                echo '<p>Perdiste: El bot eligió piedra.</p>';
              } elseif ($botChoice == 'papel') {
                echo '<p>Ganaste: El bot eligió papel.</p>';
              } else {
                echo '<p>Empate: Ambos eligieron tijeras.</p>';
              }
              break;
            default:
              echo "<p>Error: Opción no válida.</p>";
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
