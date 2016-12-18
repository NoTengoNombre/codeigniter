<?php

class Vista {

  public function show($vista, $data = null) {
    include("header.php");
    include("nav.php");
    include("vistas/$vista.php");
    include("footer.php");
  }

}

?>
