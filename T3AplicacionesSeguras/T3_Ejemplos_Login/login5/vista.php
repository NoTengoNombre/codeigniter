<?php

class Vista {

  public function show($vista, $data = null) {
    $this->header();
    $this->nav();
    include("vistas/$vista.php");
    $this->footer();
  }

  public function header() {
    ?>
    <html>
      <head><title></title>
      </head>
      <body>
        Esta será la cabecera de mi web
        <?php
      }

      public function footer() {
        echo "Esta será la pie de mi web";
      }

      public function nav() {
        echo "Este será mi menú de navegación";
      }

    }
    