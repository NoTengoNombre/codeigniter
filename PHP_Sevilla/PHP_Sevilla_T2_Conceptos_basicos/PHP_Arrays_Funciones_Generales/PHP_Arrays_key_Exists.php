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
    $var1 = array_key_exists("datos", $modulos);
    ?>

    <ul>
      <li><?php echo 'Posicion : ' . $var1 ?> </li>
    </ul>
  </body>
</html>
