<?php
// loginController.php

// Abstracción de la lógica de inicio de sesión en un controlador
class AuthController
{
  private $conexion;

  // Recibe en el constructor la conexión a la base de datos
  public function __construct($conexion)
  {
    $this->conexion = $conexion;
  }

  public function login($username, $password)
  {
    // Consulta SQL para verificar si el usuario existe en la base de datos 
    $sqlSentence = $this->conexion->prepare("SELECT * FROM users WHERE username = ? AND `password` = ?");

    // Si existe algun error no manejado en la base de datos,
    // como me paso cuando hice la consulta a una tabla por que se llamaba diferente xd
    if ($sqlSentence === false) {
      die("Error al preparar la consulta: " . $this->conexion->error);
    }

    // si existe algun error al vincular los parametros
    // Aqui se cambian los ? por los valores de las variables
    // como la primera variable es un string y la segunda tambien, se usa "ss"
    // Ejemplo: si fueran enteros se usaria "ii" y si fueran uno de cada uno "si"
    if (!$sqlSentence->bind_param("ss", $username, $password)) {
      die("Error al vincular los parámetros: " . $sqlSentence->error);
    }

    // verificación de la ejecución de la consulta
    if (!$sqlSentence->execute()) {
      die("Error al ejecutar la consulta: " . $sqlSentence->error);
    }

    // Obtener el resultado de la consulta
    $resultado = $sqlSentence->get_result();

    // Verificar si el usuario existe
    if ($resultado->num_rows == 1) {
      $_SESSION['username'] = $username;

      return true;
    } else {
      return false;
    }
  }

  public function logout()
  {
    $_SESSION = array();
  }

  public function existAtLeastOneUser()
  {
    $sqlSentence = $this->conexion->prepare("SELECT * FROM users");
    $sqlSentence->execute();
    $resultado = $sqlSentence->get_result();

    if ($resultado->num_rows >= 1) {
      return true;
    } else {
      return false;
    }
  }

  public function register($username, $password)
  {
    // Consulta SQL para insertar un nuevo usuario en la base de datos
    $sqlSentence = $this->conexion->prepare("INSERT INTO users (username, `password`) VALUES (?, ?)");

    // Si existe algun error no manejado en la base de datos
    if ($sqlSentence === false) {
      die("Error al preparar la consulta: " . $this->conexion->error);
    }

    // verificación de la vinculación de parámetros
    if (!$sqlSentence->bind_param("ss", $username, $password)) {
      die("Error al vincular los parámetros: " . $sqlSentence->error);
    }

    // verificación de la ejecución de la consulta
    // como a mi que habia un field de la tabla que no tenia default y no lo puse en la consulta
    if (!$sqlSentence->execute()) {
      die("Error al ejecutar la consulta: " . $sqlSentence->error);
    }

    // Verificar si se insertó el usuario correctamente
    if ($sqlSentence->affected_rows == 1) {
      return true;
    } else {
      return false;
    }
  }
}

