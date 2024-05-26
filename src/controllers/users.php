<?php
//Logica del controlador para la tabla de usuarios, exclueyendo loas metodo de autenticacion
class UserController
{
  private $conexion;

  public function __construct($conexion)
  {
    $this->conexion = $conexion;
  }

  public function getUsers()
  {
    $sqlSentence = $this->conexion->prepare("SELECT * FROM users");

    // Si existe algun error con la consulta
    if ($sqlSentence === false) {
      die("Error al preparar la consulta: " . $this->conexion->error);
    }


    //Si existe algun error al ejecutar la consulta
    if (!$sqlSentence->execute()) {
      die("Error al ejecutar la consulta: " . $sqlSentence->error);
    }

    $result = $sqlSentence->get_result();
    return $result;
  }





  public function addUser($username, $password, $userType)
  {
    $sqlUser = $this->conexion->prepare("INSERT INTO users (username, `password`, userType) VALUES (?, ?, ?)");

    if ($sqlUser === false) {
      die("Error al preparar la consulta: " . $this->conexion->error);
    }

    // verificación de la vinculación de parámetros
    if (!$sqlUser->bind_param("sss", $username, $password, $userType)) {
      die("Error al ejecutar la consulta: " . $sqlUser->error);
    }

    if (!$sqlUser->execute()) {
      die("Error al ejecutar la consulta: " . $sqlUser->error);
    }


    return $sqlUser->get_result();
  }

}