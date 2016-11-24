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

//    Añadir una asignacion desde un parametro  a otro 
    function precio_con_iva_asignar_valor($precio, $iva = 0.18) {
      echo "<br> tipo : " . gettype($precio) . "<br>";
      echo '<br>';
      return $precio = $iva;
    }

//    Añadir una asignacion desde un parametro  a otro 
    function precio_con_iva_asignar_valor2($precio, $iva = 0.18) {
      echo "<br> tipo : " . gettype($precio) . "<br>";
      return $precio * ( 1 + $iva);
    }

    echo precio_con_iva_asignar_valor(0);

    $precio = rand(1, 10);
    $precio_iva = precio_con_iva_asignar_valor($precio);
    print "<br>El precio con IVA es : " . $precio_iva;
    ?>
  </body>
</html>








