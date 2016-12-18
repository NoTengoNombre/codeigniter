<?php

//incluye script seguridad
include_once("seguridad.php");

class Login {

  /**
   * Comprueba login seguridad
   * 
   * @return boolean
   */
  public static function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "videoclubprueba");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $sql = "SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$p'";
    $result = $conex->query($sql);

    if ($result->num_rows > 0) {
      Seguridad::setNombreUsuario($usuario);
      Seguridad::setTipoUsuario("admin"); // Le pongo este valor fijo, pero en vuestro sistema lo tendréis que sacar de la BD
      $loginOk = true;
    } else {
      $loginOk = false;
    }
    $result->free();
    $conex->close();

    return $loginOk;
  }

}
