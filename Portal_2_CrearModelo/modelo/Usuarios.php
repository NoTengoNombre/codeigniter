+
<?php
/**
 * Parte del modelo 
 * 
 * Description of Usuarios
 *
 * @author admin
 */
include_once '../dbAbstract.php';

class Usuarios {

  public static function consultarUsuarios() {
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["password"];

    $consulta = "SELECT * FROM usuarios";

    $resultado = $mysqli->query($consulta);

    if ($resultado->num_rows > 0) {
      echo "<p> Lista de Usuarios " . $resultado->num_rows . " </p>";
    }
    
    $resultado = $resultado->fetch_assoc();
    while ($resultado) {
      printf("%s (%s)\n");
    }
    
  }

  public static function insertarUsuario() {
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["password"];
    // Falta recuperar el resto de campos del formulario
    $tipo = 1;  // El tipo de usuario será 1 a piñón fijo (usuario estándar)
    $sql = "SELECT MAX(id) AS maxid FROM usuarios";
    $result = $db->query($sql);
    $fila = $result->fetch_array();
    $maxid = $fila["maxid"];
    $nuevoid = $maxid++;

    $sql = "INSERT INTO usuarios(id, nombre, password) VALUES ($nuevoid, $nombre, ...)";
    $result = $db->query($sql);
    return $db->affected_rows;

    return $resultadoInsert;
//    ...
    $sql = "INSERT";
//            "
//    $result = $db->query($sql);
//    return $result;
  }

  public static function actualizarUsuarios() {
    
  }

  public static function borrarUsuarios() {
    
  }

}
