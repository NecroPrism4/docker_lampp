<?php
$nav = array(
    'Inicio' => '/index.php',
    'Ejercicio 1' => '/components/ejercicios/ejercicio_1',
    'Ejercicio 2' => '/components/ejercicios/ejercicio_2',
    'Ejercicio 3' => '/components/ejercicios/ejercicio_3',
    'Login' => '/components/extras/login.php',
);
?>
<nav class="navbar navbar-expand-lg container">
    <a class="navbar-brand" href="/index.php">PROGRAMACIÓN WEB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php foreach ($nav as $name => $url): ?>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="<?php echo $url; ?>"><?php echo $name; ?></a>
                                              </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
