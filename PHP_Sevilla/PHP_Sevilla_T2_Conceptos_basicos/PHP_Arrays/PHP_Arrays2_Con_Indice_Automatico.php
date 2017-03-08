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
//                 0  1  2  3  4
    $array = array(1, 1, 1, 1, 1,
        8 => 1,
        4 => 1, 19,
        3 => 13);



    echo '<hr>';
    echo $array[0];
    echo '<hr>';
    echo $array[1];
    echo '<hr>';
    echo $array[2];
    echo '<hr>';
    echo $array[3];
    echo '<hr>';
    echo $array[4];
    echo '<hr>';
    print_r($array);
    ?>
  </body>
</html>
