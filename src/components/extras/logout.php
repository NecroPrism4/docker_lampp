<?php

/* Logout */

include '../../db/connection.php';
include '../../controllers/auth.php';

$authController = new AuthController($conexion);

$authController->logout();

/* Redirigir a login */
header("Refresh: 0; url=login.php");
