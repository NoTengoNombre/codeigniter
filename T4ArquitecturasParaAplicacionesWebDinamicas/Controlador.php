<!--
    @Created on : 23-nov-2016, 0:38:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->


<?php
include './Vista.php';
include './Articulos.php';

class Controlador {

  public function main() {
    $estado = (isset($_REQUEST['do']) ? $_REQUEST['do'] : "formLogin");

    switch ($estado) {
      case "formLogin" : "";
      case "checkLogin" : "";
      case "showAllArticles" : "";
        $articulos = Articulos::getAllArticulos();
        Vista::show("showAllArticles");
        break;
    }
  }

}
?>
