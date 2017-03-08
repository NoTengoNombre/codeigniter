<!--
    @Created on : 06-ene-2017, 1:35:50
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
    $c = 0;

    var_dump($c);

    $vector = array();

    $vector2 = [];

    for ($i = 0; $i <= 10; $i++) {
      $vector[$i] = $c++;
      echo $vector[$i] . '<br>';
    }

    echo '<hr>';
    echo 'tipo : ' .is_array($vector2);
    echo '<hr>';

    $valor = is_array($vector2);
    var_dump($valor);
    var_dump($vector);


    echo '<hr>';

    if (is_array($vector)) {
      echo '<br>si';
    } else {
      echo '<br>no';
    }
    ?>
  </body>
</html>
