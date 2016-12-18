<!--
    @Created on : 18-dic-2016, 18:12:56
    @Author     : RVS - N.F.N.D - Home
    @Pag        : Uni MADRID
    @version    :
    @TODO       : 
-->
<?php
$cookie1 = "nombre";
$valor1 = "Juan";
$expira1 = time() + 3600 * 24; // expira en 24 horas
setcookie($cookie1, $valor1, $expira1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hola Cookie</title>
  </head>
  <body>

    <?php
    echo "<h1> Hola $_COOKIE[$cookie1] </h1>";

    if (isset($_COOKIE['nombre'])) {
      echo "<p> El valor del Cookie nombre es $_COOKIE[nombre]</p>";
      foreach ($_COOKIE as $value) {
        echo $value;
        echo '<br>';
      }
    } else {
      echo "<p> No se ha recibido el COOKIE nombre</p>";
    }
    ?>

  </body>
</html>









