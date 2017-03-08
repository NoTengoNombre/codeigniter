<!--
    @Created on : 17-dic-2016, 12:34:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="refresh" content="2;URL='http://localhost/PHP_Home/PHP_Ejemplos_de_Codigo/PHP_Campos_Ocultos/PHP_Campos_Ocultos.php'">
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $nsecreto = $_REQUEST["nsecreto"];
    $n = $_REQUEST["numero"];
    echo 'Valor : ' . $nsecreto;

    if ($n == $nsecreto) {
      echo '<br> Acierto';
      echo "<a href='PHP_Campos_Ocultos.php'> ir </a>";
    } else {
      echo '<br> Fallo';
      echo "<a href='PHP_Campos_Ocultos.php'> ir </a>";
    }
    ?>
  </body>
</html>
