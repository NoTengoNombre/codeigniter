<!--
    @Created on : 21-dic-2016, 10:09:59
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
    <form method="get" action=<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><input type="text" name="nombre1"></p>
        <p><input type="text" name="nombre2"></p>
        <p><input type="text" name="nombre3"></p>
        <p><input type="submit" name="enviar"></p>
      </form>
      <?php
      if (isset($_REQUEST['enviar'])) {
        $nombre1 = $_REQUEST['nombre1'];
        $nombre2 = $_REQUEST['nombre2'];
        $nombre3 = $_REQUEST['nombre3'];
        print_r($_REQUEST);
      }
      ?>
  </body>
</html>
