<!--
    @TODO       : Capa Abstraccion : Por ahora tiene todo
-->

<?php

// Capa de abstracción para MySQL : Cuando llame a esta clase tendra definido estos parametros
class DBAbstract {

// Modificaré estas variables para cambiar de servidor de BD
  public $dbName = "portal0";
  public $dbHost = "localhost";
  public $dbUser = "root";
  public $dbPass = "";
// Aquí guardamos el conector con la BD
  public $db;

  /**
   * LLama al objeto $db
   * Devuelve un entero 
   * True = 1
   * False = 0
   * @return int
   */
  public function conectar() {
    $this->db = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    if ($this->db) {
      return 1; //true
    } else {
      return 0; // false
    }
  }

  /**
   * 
   */
  public function desconectar() {
    if ($this->db) {
      $this->db->close();
    }
  }

  /**
   * Ejecuta solo consultas (SELECT) 
   * 
   * Devuelve ARRAY -> Resultset : contiene todas las filas
   * convertidas en un array asociativo , numerico.
   * 
   * @param type $sql - "string"
   * 
   * @return type Devuelve un array asociativo , numerico
   */
  public function consulta($consulta) {
    $res = $this->db->query($consulta);
    $resultadoArray = array();
    if ($res) {
      $resultadoArray = $res->fetch_all(MYSQLI_BOTH); // Devuelve todas las filas asociativas o numericas
    }
    return $resultadoArray; // array asociativo o numerico
  }

  /**
   * Ejecuta un ( INSERT, UPDATE o DELETE) 
   * y devuelve el número de filas afectadas

   * @param type string $consulta
   * @return type INT de filas , Devuelve 0 , Devuelve +1
   */
  public function manipulacion($consulta) {
    $result = 0;
    if ($this->db) {
      $this->db->query($consulta);
      $result = $this->db->affected_rows; //Devuelve numero de filas INT
    }
    return $result;
  }

  public function cambiar_utf() {
    $valor = $this->db->set_charset("utf8");
    if ($valor) {
      $name = $this->db->character_set_name();
      var_dump($valor);
      var_dump($name);
    }
    var_dump($valor);
  }

}
