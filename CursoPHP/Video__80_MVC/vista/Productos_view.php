<!--
    @Created on : 29-dic-2016, 19:04:55
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
    <style>
      td{
        border: 1px dotted #f00;
      }
    </style>
  </head>
  <body>
    <?php
//    require_once ("controlador/Productos_controlador.php");
    foreach ($matrizProductos as $registro) {
      echo "<tr><td> " . $registro["NOMBREARTICULO"] . " </tr></td>";
    }
    ?>
  </body>
</html>
