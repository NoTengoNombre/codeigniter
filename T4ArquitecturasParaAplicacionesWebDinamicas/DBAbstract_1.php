<!--
    @Created on : 23-nov-2016, 0:55:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php

class DBAbstract {

  private $db;

  /**
   * Metodo set 
   */
  function crearConexion($servidor, $usuario, $clave, $dbname) {
    $this->db = new mysqli($servidor, $usuario, $clave, $dbname);
  }

  function cerrarConexion() {
    if ($this->db) {
      $this->db->close();
    }

    function consulta($consulta) {
      $res = $db->query($consulta);
      $res = query($consulta);
      $resArray = array();
      if ($res) {
        $resArray = $res->fetch_all();
      }
      return $resArray;
    }

    $obj = new DBAbstract();
    $obj->consulta("select titulo , usuarios from articulos");
  }

}
?>
 