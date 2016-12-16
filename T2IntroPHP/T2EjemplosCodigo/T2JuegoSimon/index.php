<?php

include("InterfazUsuario.php");
include("Simon.php");
session_start();


// ---- Creamos y levantamos el objeto controlador, o lo recuperamos de $_SESSION si ya fue creado -----

if (!isset($_SESSION["CONTROLADOR"])) {    // Primera ejecuci�n. Vamos a instanciar el controlador.
  $controlador = new Controlador();
  $_SESSION["CONTROLADOR"] = $controlador;
  //echo "<script>location.href='index.php'</script>";
} else {                    // El controlador ya fue creado. Lo recuperamos.
  $controlador = $_SESSION["CONTROLADOR"];
}

// Lanzamos el metodo principal del controlador
$controlador->main();

// ------------------------------------------- Controlador ----------------------------------------------

class Controlador {

  private $ui;        // Interfaz de usuario (vista)
  private $simon;        // Modelo

  // Constructor. Instancia la vista y el modelo.

  public function __construct() {
    $this->ui = new InterfazUsuario();
    $this->simon = new Arq_3Capas_Simon();
  }

  // Funcion principal de control de la ejecucion del juego
  public function main() {
    if (!isset($_REQUEST["accion"])) {
      // Muestra la pantalla inicial de la aplicacion
      $this->ui->mostrarPantallaInicial();
    } else {
      switch ($_REQUEST["accion"]) {
        case "iniciar":
          // Reinicia la secuencia a longitud 0 y vuelve a cargar la pagina para jugar
          $this->simon->resetSecuencia();
          echo "<script>location.href='index.php?accion=incrementarSecuencia'</script>";
          break;
        case "incrementarSecuencia":
          // Obtiene nueva secuencia y la muestra un instante
          $this->simon->incrementaSecuencia();
          $sec = $this->simon->getSecuencia();
          $this->ui->mostrarSecuencia($sec, 2);
          break;
        case "mostrarForm":
          // Pide la secuencia al usuario
          $this->ui->mostrarFormulario();
          break;
        case "comprobarSecuencia":
          // Compara la secuencia de Simon con la introducida por el usuario 
          $secUser = $_REQUEST["secuencia"];
          $res = $this->simon->comparaSecuencias($secUser);
          $this->ui->mostrarResultado($res);
          break;
      } // switch
    }
  }

// main()
}
