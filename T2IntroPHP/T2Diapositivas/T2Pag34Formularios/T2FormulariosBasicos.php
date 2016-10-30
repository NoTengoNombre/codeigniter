<!--
    @Created on : 30-oct-2016, 13:54:50
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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      Nombre <br> 
      <input type="text" name="nombre">
      <br>Apellidos <br>
      <input type="text" name="apellidos">
      <br>
      <input type="submit">
    </form>

    <?php
    echo '<br>';
    $var = $_REQUEST['nombre'];
    echo '♦ Variable Recibida 1 : ' . $var;
    $var1 = $_REQUEST['apellidos'];
    echo '<br>';
    echo '<br>';
    echo '♦ Variable Recibida 2 : ' . $var1;
    ?>
  </body>
</html>
