<!--
    @Created on : 24-nov-2016, 13:07:27
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
    <style>
      body{
        background-color: #000;
      }
      p{
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    <?php
    $array = array(1, 2, 3, 4);
    foreach ($array as $value) {
      $array = $value * 2;
      echo "<p> - " . $array . " </p>";
    }

    unset($value);
    print_r($value);
    ?>
  </body>
</html>
