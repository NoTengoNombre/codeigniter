<?php

include_once("seguridad.php");

class Usuarios {

  public function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "test");

    if ($conex->connect_error)
      die("Error al conectar con la DB: " . $conex->connect_error);

    $sql = "SELECT user, tipoUsr FROM usuarios WHERE user = '$usuario' AND pass = '$p'";
    $result = $conex->query($sql);

    if ($result->num_rows > 0) {
      $tipoUsr = $result->fetch_array()["tipoUsr"];
      $s = new Seguridad();
      $s->setNombreUsuario($usuario);
      $s->setTipoUsuario($tipoUser);
      $r = 1;
    } else {
      $r = 0;
    }
    $result->free();
    $conex->close();
    return $r;
  }

  public function addUser() {
    
  }

  public function deleteUser() {
    
  }

  public function updateUser() {
    
  }

  public function getAllUsers() {
    
  }

  public function getUser() {
    
  }

  //...etc...
}

?>
