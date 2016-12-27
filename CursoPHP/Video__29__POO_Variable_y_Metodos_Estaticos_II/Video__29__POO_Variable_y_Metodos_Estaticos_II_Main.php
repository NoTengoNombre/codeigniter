<!--
    @Created on : 23-dic-2016, 0:45:36
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
    include ('Video__29__POO_Variable_y_Metodos_Estaticos_II.php');

    $compra_Antonio = new Compra_Vehiculo2("compacto");
//    $compra_Antonio::descuento_gobierno();

    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");
    echo $compra_Antonio->precio_final();
    echo '<hr>';
    $compra_Ana = new Compra_Vehiculo2("compacto");
    $compra_Ana->climatizador();
    $compra_Ana->tapiceria_cuero("rojo");
    echo $compra_Ana->precio_final();
    ?>
  </body>
</html>
