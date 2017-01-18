<!--
    @TODO       : Capa Abstraccion : Por ahora tiene todo
-->

<?php

// Capa de abstracción para MySQL : Cuando llame a esta clase tendra definido estos parametros
class DBAbstract_Practicas_A {

// Modificaré estas variables para cambiar de servidor de BD
  public $dbName = "portal0";
  public $dbHost = "localhost";
  public $dbUser = "root";
  public $dbPass = "";
// Aquí guardamos el conector con la BD
  private $db;

  /**
   * Cuando se invoca este metodo 
   * añade todos los datos de conexion 
   * al atributo objeto '$db' 
   * de la clase DBAbstract_Practicas_A
   * Y regresa 1 - true , 0 false para 
   * confirmar si se realizo correctamente
   * la conexion.
   * 
   * @return int 1 - true , 0 false 
   */
  public function conectar() {
    $this->db = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    if ($this->db->connect_errno == 0) {
      var_dump($this->db);
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
   * @return type Devuelve un array asociativo /  NUMERI  CO
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
    return $result;  //regresa INT de filas | Devuelve 0 , Devuelve +1 , -1
  }

}
