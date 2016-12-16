<?php

class Vista {

  /**
   * 
   * @param type $vista
   * @param type $data - null para que pueda elegir el tipo de vista
   */
  public function show($vista, $data = null) {
    $this->header();
    $this->nav();
    include("vistas/$vista.php");
    $this->footer();
  }

//  Muestra la cabecera
  public function header() {
    ?>
    <html>
      <head><title></title>
      </head>
      <body>
        Esta será la cabecera de mi web
        <?php
      }

//   Muestra el pie   
      public function footer() {
        echo "Esta será la pie de mi web";
      }

//   Muestra la capa de navegacion
      public function nav() {
        echo "Este será mi menú de navegación";
      }

    }
    ?>