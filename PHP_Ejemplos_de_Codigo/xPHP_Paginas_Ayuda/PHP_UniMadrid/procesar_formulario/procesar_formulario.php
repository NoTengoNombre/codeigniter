<!--
    @Created on : 30-oct-2016, 19:17:09
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
    if (isset($_POST['nombre'])) {
      $var = $_POST['nombre'];
      echo "Valor de : " . $var;
    }
    ?>
  </body>
</html>
