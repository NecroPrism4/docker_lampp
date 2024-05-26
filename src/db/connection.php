<?php
$host = "mysql_db";
$usuario = "mibd";
$password = "mibd";
$base_de_datos = "mibd";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $password, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}
