<!--
    @Created on : 23-dic-2016, 1:15:41
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
    include("Compra_vehiculo.php");
    Compra_vehiculo::$ayuda = 10000;
    $compra_Antonio = new Compra_vehiculo("compacto");
    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");
    echo '<hr>';
    echo $compra_Antonio->precio_final() . "<br>";
    $compra_Ana = new Compra_vehiculo("compacto");
    $compra_Ana->climatizador();
    $compra_Ana->tapiceria_cuero("rojo");
    echo $compra_Ana->precio_final();
    ?>
  </body>
</html>
