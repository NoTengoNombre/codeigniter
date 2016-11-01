<!-- No Fear No Distractions -->
<!-- T.E.D , I.T.W.T -
* * Official Guide .. : http://php.net/manual/es/index.php
* * Guide Help........: 
* * Author............: RadWulf Candle
* * Notes.............: 
* * Last changed......:
-->


<!DOCTYPE html>
<html>

  <head>
    <title>
    </title>
  </head>
  <body>
    <h1>Formulario datos personales</h1>
    <?php
//    isset = Determina si la variable esta definida y no es null
//    $_REQUEST recoge el string Post que envio el method del formulario
    if (isset($_REQUEST['envio']) && $_REQUEST['numero'] != '') {
      if ($_REQUEST['numero'] >= 0) {
        echo "<table='1'>";
        echo "<tr>";
        echo "<th> Tabla de Multiplicar </th>";
        echo "</tr><br>";
        $nn = 0;
        for ($numero = 0; $numero < 11; $numero++) {
          echo "<tr>";
          echo '<th>' . $nn++ . " x " . '</th>';
          echo '<th>' . $_REQUEST['numero'] . " = " . '</th>';
          echo '<th>' . $_REQUEST['numero'] * $numero . "" . '</th>';
          echo "</tr>";
          echo "<br>";
        }
      }
    }
    if (isset($_REQUEST['envio']) == true) {
      echo '<a href="./Ejercicio02.html" title="Volver a la pagina anterior"> </a>';
    }
    ?>

  </body>
</html>