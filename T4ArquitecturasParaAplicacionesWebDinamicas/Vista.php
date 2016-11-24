<!--
    @Created on : 23-nov-2016, 0:39:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php

class Vista {

  public function show($nombreVista) {
    include 'header.php';
    include '$nombreVista.php';
    include 'footer.php';
  }

}
