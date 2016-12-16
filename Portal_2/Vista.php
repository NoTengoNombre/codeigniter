<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Vista {

  public static function show($vista) {
    include("vistas/header.php");
    include("vistas/nav.php");
    $listaVistas = explode(",", $vista);
    foreach ($listaVistas as $v) {
      include("vistas/$v.php");
    }
    include("vistas/footer.php");
  }

}
