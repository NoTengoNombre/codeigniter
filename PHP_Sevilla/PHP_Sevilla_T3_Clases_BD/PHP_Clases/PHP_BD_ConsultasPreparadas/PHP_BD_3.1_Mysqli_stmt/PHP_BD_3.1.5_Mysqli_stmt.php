<!--
    @Created on : 26-nov-2016, 12:06:53
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
    $dwes = new mysqli('localhost', 'root', '', 'dwes');
    /* objeto */ $insertar = $dwes->stmt_init(); // objeto
    if ($dwes) {
      echo "<br>" . "conexion realizada";
    }
    ?>
  </body>
</html>
