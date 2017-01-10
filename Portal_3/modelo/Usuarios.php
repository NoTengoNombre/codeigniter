<?php

/**
 * Parte del modelo 
 * 
 * Description of Usuarios
 *
 * @author admin
 */
include_once ('DBAbstract.php');

class Usuarios {

  public static function consultarUsuarios() {
    $consulta = "SELECT nombre_usuario , password FROM usuarios;";

    $conexion = new DBAbstract();
    $conexion->conectar();

    $resultado = $conexion->consulta($consulta);

    if ($conexion->conectar()) {
      foreach ($resultado as $filas) {
        echo "Nombre usuario: " . $filas[0] . " - Password: " . $filas[1] . "<br>";
      }
      return 1;
    } else {
      return 0;
    }
  }

  public static function consultarUsuarios_() {
    $nombre = $_REQUEST["nombre"]; // recibe los datos desde el formulario
    $pass = $_REQUEST["password"]; // recibe los datos desde el formulario

    $consulta = "SELECT * FROM usuarios";


    $resultado = $mysqli->query($consulta);

    if ($resultado->num_rows > 0) {
      echo "<p> Lista de Usuarios " . $resultado->num_rows . " </p>";
    }
    $total_resultado = $resultado->fetch_assoc();
    while ($filas = $total_resultado) {
      printf("%s (%s)\n");
    }
  }

  public static function insertarUsuario() {
    $nombre = $_REQUEST["nombre"];
    $pass = $_REQUEST["password"];

// Falta recuperar el resto de campos del formulario
    $tipo = 1;  // El tipo de usuario será 1 a piñón fijo (usuario estándar)
    $consulta = "SELECT MAX(id) AS maxid FROM usuarios"; // añade el ultimo id a la bd
    $result = $db->query($consulta);
    $fila = $result->fetch_array();
    $maxid = $fila["maxid"];
    $nuevoid = $maxid++;

    $consulta = "INSERT INTO usuarios(id, nombre, password) VALUES ($nuevoid, $nombre, ...)";
    $result = $db->query($consulta);
    return $db->affected_rows;

    return $resultadoInsert;
//    ...
    $consulta = "INSERT";
//            "
//    $result = $db->query($sql);
//    return $result;
  }

  public static function actualizarUsuarios() {
    
  }

  public static function borrarUsuarios() {
    
  }

}
