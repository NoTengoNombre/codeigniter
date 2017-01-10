<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Procesa el formulario 
-->

<?php
include_once("modelo/DBAbstract.php");
include_once("controlador/Seguridad.php");

class Login {

  /**
   * Comprueba el usuario y el tipo que es
   * @return boolean $loginOk 
   */
  public static function checkLogin() {
// Recibe los datos : procesarFormularioAltaUsuario
    $usuario = $_REQUEST["usuario"];
    $password = $_REQUEST["passwd"];
// ---------------------------------------------
    $conex = new mysqli("localhost", "root", "", "portal2");

    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $consulta = "SELECT id_usuario, tipo_usuario, imagen_usuario FROM usuarios WHERE nombre_usuario = '$usuario' AND password = '$password'";
    $resultado = $conex->query($consulta);
//  Devuelve 1 fila y asigna tipo de usuario y otros valores almacenados 
    if ($resultado->num_rows > 0) {
      $fila = $resultado->fetch_array(); // $fila -> array
      Seguridad::setIdUsuario($fila["id_usuario"]);
      Seguridad::setTipoUsuario($fila["tipo_usuario"]);
      Seguridad::setNombreUsuario($usuario); // String - nombre del usuario
      Seguridad::setImagenUsuario($fila["imagen_usuario"]);
      $loginOk = true;
    } else {
      $loginOk = false;
    }
    $resultado->free(); // libera memoria
    $conex->close(); // cierra bd

    return $loginOk;
  }

}
