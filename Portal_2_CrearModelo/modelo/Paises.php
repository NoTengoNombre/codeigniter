<!--
    @Created on : 22-nov-2016, 22:14:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
include_once 'DBAbstract.php';

class Paises {

  public static function consultar_paises() {
    $db = new DBAbstract();
    $db->conectar();
    $total_paises = $db->consulta("SELECT * FROM paises");
    $db->desconectar();
    return $total_paises;
  }

  public static function insertar_paises() {
    
  }

  public static function actualizar_paises() {
    
  }

  public static function borrar_paises() {
    
  }

}
