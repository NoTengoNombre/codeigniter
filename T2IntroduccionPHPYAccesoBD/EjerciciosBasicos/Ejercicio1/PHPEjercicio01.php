<!DOCTYPE html>
<!--
    @Created on : 10-oct-2016, 18:16:57
    @Author     : RVS - N.F.N.D
    @Pag        : 
    @version    : 1
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulario Envio Numeros</title>
  </head>
  <body>
    <?php
    if (isset($_REQUEST['envio']) && $_REQUEST['numero'] != '') {
      if ($_REQUEST['numero'] > 0) {
        echo "<br /> ♦ Numero Positivo : " . $_REQUEST['numero'] . "<br />";
      } else if ($_REQUEST['numero'] < 0) {
        echo "<br /> ♣ Numero Negativo : " . $_REQUEST['numero'] . "<br />";
      } else if ($_REQUEST['numero'] == 0) {
        echo "<br /> ♠ Numero : " . $_REQUEST['numero'];
      }
    }

    if (isset($_REQUEST['envio']) == true) {
      echo '<a href="./Ejercicio01.html" title="Ir la página anterior"> <br> Volver a la 1º Pagina </a>';
    }
    ?>
  </body>
</html>
