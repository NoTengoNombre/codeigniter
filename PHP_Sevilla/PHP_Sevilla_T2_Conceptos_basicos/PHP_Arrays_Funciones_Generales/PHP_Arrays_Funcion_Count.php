<!--
    @Created on : 24-nov-2016, 18:39:14
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
    $modulos = array("Pro", "Grama", "cion", "Base", "de", "datos", "Desa", "rro", "llo", "web", "en", "en", "torno", "ser", "vidor");
    echo "Numeros de elementos del array : " . count($modulos);
    echo '<hr>';
    print_r($modulos);
    echo '<hr>';
    $array_values = array_values($modulos);
    print_r($array_values);
    echo '<hr>';
    $array = array(
        "size" => "XL",
        "color" => "gold");
    print_r(array_values($array));
    ?>
  </body>
</html>
