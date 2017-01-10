<!--
    @Created on : 06-ene-2017, 21:09:04
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
    include_once ('./PHP_Objetos_Distintas_Clases_Sin_Herencia_A.php');
    include_once ('./PHP_Objetos_Distintas_Clases_Sin_Herencia_B.php');

    $ca = new Clase_AA();
    $cb = new Clase_BB();
    $ca->llamada_a($cb);
    ?>
  </body>
</html>
