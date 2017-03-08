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

    function precio_con_iva($precio) {
      return $precio * 1.18;
    }

    function precio_con_iva2($precio = 3) {
      return $precio * 1.18;
    }

    $precio = 10;

    $precio_iva = precio_con_iva($precio);

    print "El precio con IVA es : " . $precio_iva;
    echo '<hr>';
    $precio_iva2 = precio_con_iva2();
    print "El precio con IVA es : " . $precio_iva2;
    ?>
  </body>
</html>
