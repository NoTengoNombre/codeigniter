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

  function crearConexion($servidor, $usuario, $clave, $dbname) {
    $this->db = new mysqli($servidor, $usuario, $clave, $dbname);
  }

  function cerrarConexion() {
    if ($this->db) {
      $this->db->close();
    }
    
    function consulta($consulta){
      $res = $this->db;
      
    }
    
  }

}
?>
 