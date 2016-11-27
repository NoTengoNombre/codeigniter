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
      echo '<hr>';
      return $precio * ( 1 + $iva);
    }

    echo precio_con_iva_asignar_valor(10);
    ?>
  </body>
</html>








