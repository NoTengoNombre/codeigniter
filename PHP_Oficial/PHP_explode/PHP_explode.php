<!--
    @Created on : 15-dic-2016, 16:11:33
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
//  Trocea el string y lo convierte en array    
    $pizza = "porcion1,porcion2,porcion3,porcion4,";
    $porciones = explode(",", $pizza);
    print_r(explode(',', $pizza));
    echo $porciones[0];
    echo '<br>';
    echo $porciones[1];
    echo '<br>';
    echo $porciones[2];
    echo '<br>';
    echo $porciones[3];
    echo '<br>';
    echo $porciones[4];

    echo '<hr>';
    $c = 0;
    foreach ($porciones as $indice) {
      echo $indice;
      echo '<br>';
    }
    ?>
  </body>
</html>
