<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 21:41:38
    @Author     : RVS - N.F.N.D
    @Pag        : http://www.desarrolloweb.com/articulos/317.php
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $identificador1 = filter_input(INPUT_GET, 'id');
    echo "<br /> Valor Recibido : " . $identificador1;
    $identificador2 = filter_input(INPUT_GET, 'nombre');
    echo '<br /> Valor Recibido : ' . $identificador2;
    ?>
  </body>
</html>