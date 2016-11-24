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
    $fruits = array(
        "frutas" => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
        "números" => array(1, 2, 3, 4, 5, 6),
        "hoyos" => array("primero", 5 => "segundo", "tercero")
    );
    
    print_r($fruits);


    echo '<hr>';
    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );

    for ($i = 0, $size = count($people); $i < $size; ++$i) {
      echo $people[$i]['salt'] = mt_rand(000000, 999999);
    }
    ?>
  </body>
</html>
