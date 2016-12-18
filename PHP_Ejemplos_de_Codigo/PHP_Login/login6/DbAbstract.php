<?php

// Capa de abstracción para MySQL

class dbAbstract {

  private $dbName;
  private $dbHost;
  private $dbUser;
  private $dbPass;
  // Aquí guardamos el conector con la BD
  private $db;

  // Constructor. Asigna las variables de instancia.
  function dbAbstract() {
    // Hay que modificar el valor de estas variables para cambiar de servidor de BD
    $dbName = "test";
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $db = null;
  }

  // Conecta con la BD. Devuelve 1 (ok) o 0 (error)
  public function conectar() {
    $db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($db)
      return 1;
    else
      return 0;
  }

  // Cierra la conexión con la BD (si está abierta)
  public function desconectar() {
    if ($db)
      $db->close();
  }

  // Ejecuta una consulta (SELECT) y devuelve el resultset
  // convertido en un array PHP.
  public function consulta($sql) {
    $resultArray = null;

    if ($db) {
      $result = $db->query($sql);
      if ($result) {
        $resultArray = $result->fetch_all();
      }
    }

    return $resultArray;
  }

  // Ejecuta una instrucción de manipulación de datos
  // (INSERT, UPDATE o DELETE) y devuelve el número de filas afectadas
  public function manipulacion($sql) {
    $result = 0;

    if ($db) {
      $db->query($sql);
      $result = $db->affected_rows;
    }

    return $result;
  }

}
