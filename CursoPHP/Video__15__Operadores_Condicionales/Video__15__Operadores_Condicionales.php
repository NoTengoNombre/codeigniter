<!--
    @Created on : 21-dic-2016, 20:59:35
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
    <p>&& tiene mayor prioridad que AND</p>
    <p> signo = tiene prioridad sobre que and
    <p>&& Se utiliza en los condicionales : 
      <br>Obliga a cumplir todas las condiciones </p>
    <?php
    $var1 = true;
    $var2 = false;

    $resultado = $var1 && $var2;

    if ($resultado == true) {
      echo "Correcto";
    } else {
      echo "Incorrecto";
    }

    echo '<hr>';
    echo 'El simbolo \'=\' tiene prioridad antes que el <b>and</b>';
    echo '<br>';
    echo 'Por ese motivo';
    echo '<br>';
    echo '1º realiza $resultado = $var1 -> cuyo resultado es TRUE';
    echo '<br>';
    echo '2º realiza --> and $var2';
    echo '<br>';
    $resultado1 = $var1 and $var2;

    if ($resultado1 == true) {
      echo "<br>Correcto";
    } else {
      echo "Incorrecto";
    }
    ?>
  </body>
</html>
