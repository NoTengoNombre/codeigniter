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
    $ar = array();
    echo '<hr>';
    echo '<br>' . gettype($ar);

    var_dump($ar);

    $ao = is_object($ar);

    echo '<br>' . gettype($ao);
    if ($ao) {
      echo '<br> si ';
    } else {
      echo '<br> no ';
    }

    echo '<hr>';
    $st = "cadena";

    echo '<br>' . gettype($st);
    echo '<br>' . is_object($st);
    if (is_object($st)) {
      echo '<br> si ';
    } else {
      echo '<br> no ';
    }
    echo '<hr>';

    $sql = new mysqli();

//    var_dump($sql); No lo permite


    echo '<br>' . gettype($sql);
    echo '<br>' . is_object($sql);
    if (is_object($sql)) {
      echo '<br> si ';
    } else {
      echo '<br> no ';
    }
    echo '<hr>';
    echo 'Convertir array a objeto<br>';

    $array2 = array(1, 2, 3, 4, 5);
    for ($index = 0; $index < count($array2); $index++) {
      echo $array2[$index] . '|';
    }

    var_dump($array2);


    $array_objeto = (object) $array2;

    if (is_object($array_objeto)) {
      echo '<br>Si';
    } else {
      echo '<br>No';
    }

    print_r($array_objeto);

    foreach ($array_objeto as $value) {
      echo '<br>' . gettype($array_objeto);
    }

    echo '<br>';
    $array3 = array("a", "b", "c", "d", "f");
    for ($index = 0; $index < count($array3); $index++) {
      echo $array3[$index] . '|';
    }
    echo '<br>';

//    $array_to_string = (string) $array3;
//    foreach ($array_to_string as $indice) {
//      echo $indice;
//    }
    echo '<br>';
    ?>
  </body>
</html>
