<?php

class Vista {

  public static function show($vista) {
    include("vistas/header.php");
    include("vistas/nav.php");
    include("vistas/$vista.php");
    include("vistas/footer.php");
  }

}

?>
