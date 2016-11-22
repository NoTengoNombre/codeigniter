<?php

include_once("seguridad.php");

class Login {

  /**
   * Comprueba el usuario y el tipo que es
   * @return boolean
   */
  public static function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "portal");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

//    Al ser un select usa fetch_array
    $sql = "SELECT id_usuario, tipo_usuario, imagen_usuario FROM usuarios WHERE nombre_usuario = '$usuario' AND password = '$p'";
    echo $sql . "<br/>";
    $result = $conex->query($sql);

    print_r($result);

    if ($result->num_rows > 0) {
      $fila = $result->fetch_array();
//    Fija los datos del usuario
      Seguridad::setIdUsuario($fila["id_usuario"]);
      Seguridad::setNombreUsuario($usuario);
      Seguridad::setTipoUsuario($fila["tipo_usuario"]);
      Seguridad::setImagenUsuario($fila["imagen_usuario"]);
      $loginOk = true;
    } else {
      $loginOk = false;
    }
    $result->free();
    $conex->close();

    return $loginOk;
  }

}
