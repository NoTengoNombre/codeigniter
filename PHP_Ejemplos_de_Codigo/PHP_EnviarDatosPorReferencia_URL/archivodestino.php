<!--
    @Created on : 30-oct-2016, 14:28:30
    @Author     : RVS - N.F.N.D
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
    $identificador1 = filter_input(INPUT_GET, 'id');
    echo '<br>' . $identificador1 . '<br>';
    $identificador2 = filter_input(INPUT_GET, 'nombre');
    echo '<br>' . $identificador2 . '<br>';
    ?>
  </body>
</html>
