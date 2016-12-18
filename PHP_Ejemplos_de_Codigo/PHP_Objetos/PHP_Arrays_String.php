<!--
    @Created on : 16-dic-2016, 20:52:58
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
    echo '<br>';
    $array3 = array("a", "b", "c", "d", "f");
    for ($index = 0; $index < count($array3); $index++) {
      echo $array3[$index] . '|';
    }
    echo '<br>';

    var_dump($array3);

    $cadena = "";
    $array_to_string = implode($cadena, $array3);


    var_dump($array_to_string);

    echo is_string($array_to_string);

    if (is_string($array_to_string)) {
      echo ' soy un string';
      echo '<br>';
      echo gettype($array_to_string);
    } else {
      echo ' NO soy un string';
    }

    echo '<br>';
    $soy_array = explode(",", $array_to_string);

    var_dump($soy_array);

    echo '<br>';
    print_r($soy_array);
    echo '<br>';

    for ($index1 = 0; $index1 < count($soy_array); $index1++) {
      echo $soy_array[$index1];
    }

    echo '<br>';

    foreach ($soy_array as $value) {
      echo $value . '<br>';
    }
    ?>
  </body>
</html>