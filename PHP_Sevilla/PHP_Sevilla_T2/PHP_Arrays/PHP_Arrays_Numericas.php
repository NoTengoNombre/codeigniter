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
    <style>
      p{
        font-size: 30px;
        text-align: center;
        height: 50px;
        width: 100px;
        background-color: #000;
        color:#CE2B37;
      }
    </style>
  </head>
  <body>
    <?php
    $modulo1 = array(0 => "1", 1 => "2", 2 => "3", 3 => "4", 4 => "5", 5 => "6");

    for ($index = 0; $index < count($modulo1); $index++) {
      echo '<br>' . '<p>' . $modulo1[$index] . '</p>';
    }

    echo '<hr>';

    print_r($modulo1);
    ?>
  </body>
</html>
