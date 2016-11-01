<!-- No fear No Distractions -->
<!-- T.E.D , I.T.W.T 

Ejercicio 01: positivo, negativo

Diseña un formulario –ejercicio01.html- con un campo de texto en el que puedas escribir
números. 
Al pulsar el botón de enviar debe llamar a un script –ejercicio01.php- que debe
decirnos si el número enviado fue positivo, cero o negativo.
A la página ejercicio01.php añádele un enlace HTML que permita volver a la página anterior
-->

<!--Official Guide........: http://php.net/manual/es/index.php
** Official Helps .....: http://iescelia.org/aulavirtual/mod/resource/view.php?id=7572
** Author.......: RadWulf Candle
** Notes........: Ejercicios iniciación PHP http://iescelia.org/aulavirtual/mod/resource/view.php?id=7572
** Last changed.:
-->

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/php" charset="UTF-8">
    <title>Formulario Envio Números</title>
  </head>
  <body>
    <h1> Formulario Envio Números </h1>
    <?php
//  • Aqui comprueba el envio
    if (isset($_REQUEST['envio']) && $_REQUEST['numero'] != '') {
      if ($_REQUEST['numero'] > 0) {
        echo "<br> • Numero Positivo  : " . $_REQUEST['numero'] . " <br> ";
      } else if ($_REQUEST['numero'] < 0) {
        echo " <br> • Numero Negativo  : " . $_REQUEST['numero'];
      } else if ($_REQUEST['numero'] == 0) {
        echo " <br> • Numero : " . $_REQUEST['numero'];
      }
    }
    if (isset($_REQUEST['envio']) == true) {
      echo '<br>';
      echo '<a href="./ejercicio01.html" title="Ir la página anterior"> <br> Volver a la 1º Pagina </a>';
    }
    ?>

  </body>
</html>


