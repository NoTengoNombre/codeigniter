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

    $usuario = isset($_REQUEST['usuario']);
    $password = isset($_REQUEST['password']);

    if ($usuario == true) {
      
    }

    echo "Bienvenido: " . $usuario;
    echo "Password: " . $password;

//    Lo que envia el name='do'
    $estado = (isset($_REQUEST['do']) ? $_REQUEST['do'] : "formularioLoginPrueba");
// do + name='estado'
    switch ($estado) {
      case "formLoginPrueba" :
        break;
      case "checkLogin" : "";
        break;
      case "showAllArticles" : "";
        $articulos = Articulos::getAllArticulos();
        Vista::show("showAllArticles");
        break;
      default : $estado = "formLoginPrueba";
    }
  }

}
?>
