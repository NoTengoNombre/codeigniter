<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Procesa el formulario w
-->

<?php
include_once("modelo/DBAbstract.php");
include_once("controlador/Seguridad.php");

class Login {

  /**
   * Realiza una consulta a la bd
   * Comprueba el usuario y el tipo 
   * admin devuelve 0 
   * users devuelve 1
   *  
   * @return boolean $loginOk 
   */
  public static function checkLogin() {
// Recibe los datos : procesarFormularioAltaUsuario
    $usuario = $_REQUEST["usuario"];
    $password = $_REQUEST["passwd"];
// ---------------------------------------------
    $conex = new mysqli("localhost", "root", "", "portal0");
    if ($conex->connect_error) {
      die("Error al conectar con la DB: " . $conex->connect_error);
    }

    $consulta = "SELECT id_usuario, tipo_usuario, imagen_usuario FROM usuarios WHERE nombre_usuario = '$usuario' AND password = '$password'";
    $resultado = $conex->query($consulta); // devuelve objeto
//  Devuelve 1 fila y asigna tipo de usuario y otros valores almacenados 

    if ($resultado->num_rows > 0) {
      $fila = $resultado->fetch_array(); // devuelve 1 $fila -> array asociativo , numerico o ambos
      Seguridad::setIdUsuario($fila["id_usuario"]); // array asociativo
      Seguridad::setTipoUsuario($fila["tipo_usuario"]); // 0 admin 1 user
      Seguridad::setNombreUsuario($usuario); // String - nombre del usuario
      Seguridad::setImagenUsuario($fila["imagen_usuario"]);
      $loginOk = true;
    } else {
      $loginOk = false;
    }
    $resultado->free(); // libera memoria
    $conex->close(); // cierra bd

    return $loginOk; // regresa el tipo de usuario
  }

}
