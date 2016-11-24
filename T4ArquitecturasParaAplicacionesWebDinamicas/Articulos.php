<!--
    @Created on : 23-nov-2016, 0:39:25
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
include './DBAbstract.php';

class Articulos {

  public function getAllArticulos() {
    $db = new DBAbstract();
    $db->crearConexion('localhost', 'root', '', 'almacen');
    $articulos = $db->consulta("SELECT fecha , titulo FROM articulos");
    $db->cerrarConexion();
    return $articulos;
  }
}
