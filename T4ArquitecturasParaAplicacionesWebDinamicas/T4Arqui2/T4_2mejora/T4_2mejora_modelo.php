<!--
    @Created on : 06-ene-2017, 13:18:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Paises {

  /**
   * Devuelve un array de datos de paises
   * 
   * @return type
   */
  public static function getPaises() {
    $db = new mysqli("localhost", "root", "", "world2"); // crea objeto conexion
    $resultado = $db->query("SELECT ID , Name FROM city");

//    He creado un array
    $datos = array();

    while ($fila = $resultado->fetch_array()) {
      $datos[] = $fila; // Almacena en array las filas
    }

    $db->close();

    return $datos; // devuelve un array
  }

}
?>