<!--
    @Created on : 24-nov-2016, 16:20:00
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
    $modulo2 = array("0" => "1a", "1" => "2b", "2" => "3c", "3" => "4d", "5" => "6f");

    foreach ($modulo2 as $key => $valor) {
      echo '<br>' . $modulo2[$key];
    }

    echo '<hr>';

    print_r($modulo2);
    ?>
  </body>
</html>
