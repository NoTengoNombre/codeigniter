<!--
    @Created on : 20-dic-2016, 10:51:41
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
//    $foo = null;
//    $foo = 1;

    if (isset($foo)) { // Devuelve FALSE
      echo 'Esta fijada';
    } else {
      echo 'No esta fijada';
    }

    $b = array(1, 1, 2, 3, 4, 5, 8);

    $arr = get_defined_vars();

    echo '<hr>';
    print_r($arr["b"]);

    echo '<hr>';
    echo $arr["_"];

    echo '<hr>';
    print_r($arr["argv"]);

    echo '<hr>';
    print_r($arr["_SERVER"]);

    echo '<hr>';
    print_r(array_keys(get_defined_vars()));
    ?>
  </body>
</html>
