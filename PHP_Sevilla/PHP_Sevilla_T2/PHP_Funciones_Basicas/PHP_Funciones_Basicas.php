<!--
    @Created on : 24-nov-2016, 13:53:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    function set_precio_con_iva() {
// variable que se representa en todos los lugares
      global $precio;
      $precio_iva = $precio * 1.18;
      print "el precio con IVA es " . $precio_iva;
    }

    $precio = 10;
    set_precio_con_iva();
    ?>
  </body>
</html>
