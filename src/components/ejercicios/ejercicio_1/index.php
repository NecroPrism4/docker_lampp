<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-light py-2">
      <?php include '../../navbar.php'; ?>
    </header>
    <main class="container">
        <h2>Ejercicio 1: Uso de ciclos para tablas de multiplicar</h2>
        <table class="table table-bordered">
            <?php
            for ($i = 0; $i <= 10; $i++) {
              echo "<tr>";
              for ($j = 0; $j <= 10; $j++) {
                if ($i == 0 && $j == 0) {
                  echo "<th> x </th>";
                } elseif ($i == 0) {
                  echo "<th> $j </th>";
                } elseif ($j == 0) {
                  echo "<th> $i </th>";
                } else {
                  echo "<td> " . ($i * $j) . " </td>";
                }
              }
              echo "</tr>";
            }
            ?>
        </table>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
