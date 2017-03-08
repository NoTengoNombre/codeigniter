<!--
    @Created on : 30-oct-2016, 23:05:43
    @Author     : RVS - N.F.N.D
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

    function trim_value(&$value) {
      $value = trim($value);
    }

    $fruit = array('apple', 'banana', '  cranberry');
    var_dump($fruit);

    array_walk($fruit, 'trim_value');
    var_dump($fruit);
    ?>
  </body>
</html>
