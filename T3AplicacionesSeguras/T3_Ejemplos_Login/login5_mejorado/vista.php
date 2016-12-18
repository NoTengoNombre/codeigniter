<?php

class Vista {

  /**
   * Llamada al tipo de vista para la interfaz
   * @param type $vista
   */
  public static function show($vista) {
    include("vistas/header.php");
    include("vistas/nav.php");
    include("vistas/$vista.php");
    include("vistas/footer.php");
  }

}
