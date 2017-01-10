<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Capa Abstraccion : Por ahora tiene todo
-->

<?php

// Capa de abstracción para MySQL : Cuando llame a esta clase tendra definido estos parametros
class DBAbstract {

// Modificaré estas variables para cambiar de servidor de BD
  public $dbName = "portal2";
  public $dbHost = "localhost";
  public $dbUser = "root";
  public $dbPass = "";
// Aquí guardamos el conector con la BD
  private $db;

  /**
   * 
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
   *  Cierra la conexión con la BD (si está abierta)
   *  Devuelve un objeto
   */
  public function desconectar() {
    if ($this->db) {
      $this->db->close();
    }
  }

  /**
   * Ejecuta una consulta (SELECT) 
   * Devuelve array -> Resultset : contiene todas las filas
   * convertido en un array PHP.
   * 
   * @param type $sql - "String"
   * @return type Devuelve un array asociativo /  NUMERICO
   */
  public function consulta($consulta) {
    $res = $this->db->query($consulta);
    $resultadoArray = array();
    if ($res) {
      $resultadoArray = $res->fetch_all(); // Devuelve todas las filas asociativas o numericas
    }
    return $resultadoArray; // array asociativo o numerico
  }

// Ejecuta una instrucción de manipulación de datos
// (INSERT, UPDATE o DELETE) y devuelve el número de filas afectadas
  public function manipulacion($consulta) {
    $result = 0;
    if ($this->db) {
      $this->db->query($consulta);
      $result = $this->db->affected_rows; //Devuelve numero de filas INT
    }
    return $result;  //regresa INT de filas | Devuelve 0 , Devuelve +1
  }

}
