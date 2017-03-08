<!--
    @Created on : 17-dic-2016, 12:29:19
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
    $nsecreto = rand(1, 2);
    ?>
    <form action="PHP_Procesa_Campos_Ocultos.php" method="get">
      <input type="text" name="numero" value="">
      <!--                                 value viaje el valor del numero $nsecreto -->
      <input type="hidden" name="nsecreto" value="<?php echo $nsecreto ?>">
      <input type="submit" 
    </form>
  </body>
</html>
