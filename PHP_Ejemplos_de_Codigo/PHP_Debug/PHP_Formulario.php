<!--
    @Created on : 13-dic-2016, 20:40:02
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
    if (isset($_POST['submit'])) {
      echo print_r($_POST['dato']);
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="dato" value="">
      <br><input type="submit" name="submit" value="Enviar">
    </form>
  </body>
</html>


