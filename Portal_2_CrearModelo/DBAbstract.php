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
  private $db = null;

  /**
   * Conecta con la BD. 
   * Devuelve 1 (ok) o 0 (error)
   * 
   * @return int
   */
  public function conectar() {
    $this->db = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    if ($this->db) {
      return 1;
    } else {
      return 0;
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
   * @return type Devuelve asociativo / ARRAY o NUMERICO
   */
  public function consulta($sql) {
    $resultArray = null; // Es un objeto
    if ($this->db) { //No es null
      $result = $this->db->query($sql); //Crea 'objeto' String 
      if ($result) { // 
        $resultArray = $result->fetch_all(); //array asociativo, numérico
      }
    }

    return $resultArray; //Devuelve ARRAY o NUMERICO
  }

  // Ejecuta una instrucción de manipulación de datos
  // (INSERT, UPDATE o DELETE) y devuelve el número de filas afectadas
  public function manipulacion($sql) {
    $result = 0;
    if ($this->db) { // no es null
      $this->db->query($sql);
      $result = $this->db->affected_rows; //Devuelve INT de filas
    }

    return $result;  //regresa INT de filas | Devuelve 0 , Devuelve +1
  }

}
