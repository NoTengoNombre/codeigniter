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

    /**
     * 
     * @param type $precio Por REFERENCIA
     * @param type $iva Por Valor
     */
    function precio_con_iva(&$precio, $iva = 0.18) {
      $precio *= ( 1 + $iva);
    }

    $precio = 10;
    print "El precio con IVA es " . $precio;
    ?>
  </body>
</html>








