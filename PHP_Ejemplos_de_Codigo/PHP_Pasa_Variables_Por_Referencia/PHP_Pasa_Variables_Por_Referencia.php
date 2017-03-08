<!--
    @Created on : 20-dic-2016, 11:10:36
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

    function square(&$number) {
      $number = $number * $number;
    }

    $number = 2;
    square($number);

    echo $number;


    $list = array(1, 2, 3, 4);

    foreach ($list as &$e);

    foreach ($list as $e);

    var_dump($list);
    ?>
  </body>
</html>
