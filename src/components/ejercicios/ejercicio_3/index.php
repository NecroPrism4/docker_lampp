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
        <h2>Ejercicio 3. Piedra papel o tijera</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="result.php" method="post" class="text-center p-4 border rounded bg-light">
                    <div class="mb-3">
                        <label class="form-label">Elige tu opción:</label>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jugador" id="piedra" value="piedra" required>
                            <label class="form-check-label" for="piedra">Piedra</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jugador" id="papel" value="papel">
                            <label class="form-check-label" for="papel">Papel</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jugador" id="tijeras" value="tijeras">
                            <label class="form-check-label" for="tijeras">Tijeras</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Jugar</button>
                </form>
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
