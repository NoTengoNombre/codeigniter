<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
include_once("./seguridad.php");

class Login {

  /**
   * Comprueba el usuario y el tipo que es
   * @return boolean
   */
  public static function checkLogin() {
    $usuario = $_REQUEST["usuario"];
    $password = $_REQUEST["passwd"];

    $conex = new mysqli("localhost", "root", "", "portal");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }
//    Al ser un select usa fetch_array
    $sql = "SELECT id_usuario, tipo_usuario, imagen_usuario FROM usuarios WHERE nombre_usuario = '$usuario' AND password = '$password'";
    echo $sql . "<br/>";
    $result = $conex->query($sql);

    echo "resultado";
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
    $result->free(); // libera memoria
    $conex->close(); // cierra bd

    return $loginOk;
  }

}
