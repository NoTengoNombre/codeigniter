<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Necesita añadir todo
-->

<?php
//Aqui se van ejecutando todos los metodos de las distintas clases
//Tambien muestra las vistas despues de cada accion
//Paginas en general : cambia las paginas en paginas : direccionador
// controlador llama a las vistas

include_once './Vista.php';
include_once './Login.php';

class Controlador {

  public static function control() {

    if (!isset($_REQUEST["do"])) {
      $accion = "mostrarFormularioLogin";
//      echo "<span><b> Accion : mostrarFormularioLogin</b></span>";
    } else {
      $accion = $_REQUEST["do"];
    }

    echo "<br><h1>Encima de switch</h1>";
    switch ($accion) {
      // ******************** LOGIN *************************
      case "mostrarFormularioLogin": // muestra el formulario
        echo "<h1 style='color: #f00;'>MostrarFormularioLogin</h1>";
        Vista::show("login/formLogin");
        break;
      case "procesarFormularioLogin":
        Login::checkLogin();
        break;
      default : "Fin del Switch";
        break;
    }
  }

}
