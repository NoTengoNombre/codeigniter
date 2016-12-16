<!--
    @Created on : 15-dic-2016, 21:52:19
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
    include './Modelo.php';
    $usuarios = getUsuarios();
    require './Vista.php';
    ?>
  </body>
</html>
