<!--
Official Guide........: http://php.net/manual/es/index.php
** Official Helps .....: http://iescelia.org/aulavirtual/mod/resource/view.php?id=7572
** Author.......: RadWulf Candle
** Notes........: Ejercicios iniciación PHP http://iescelia.org/aulavirtual/mod/resource/view.php?id=7572
** Last changed.:
 
Ejercicio 01: positivo, negativo

Diseña un formulario –ejercicio01.html- con un campo de texto en el que puedas escribir
números. Al pulsar el botón de enviar debe llamar a un script –ejercicio01.php- que debe
decirnos si el número enviado fue positivo, cero o negativo.
A la página ejercicio01.php añádele un enlace HTML que permita volver a la página anterior
-->

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/php" charset="UTF-8">
    <title>Formulario Envio Números</title>
  </head>
  <body>
    <h1> Formulario Envio Números </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Numero:<input type="number" name="numero" 
                    value="<?php
                    if (isset($_REQUEST['numero']) > 0) { // Codigo PHP para comprobar el valor de entrada 
                      echo $_REQUEST['numero'];
                      echo "Valor positivo";
                    } else {
                      echo "Valor Negativo";
                    }
                    ?> required"><br />
      <br>
      <input type="submit" name="envio" value="Pulsa el botón">
    </form>
    <?php
    if (isset($_REQUEST['envio']) && !empty($_REQUEST['numero'])) {
      $var = $_REQUEST['numero'];
      if ($var > 0) {
        echo '<br>';
        echo "Numero : " . $var . " : es Positivo";
      } else {
        echo '<br>';
        echo "Numero : " . $var . " : es Negativo";
      }
    }
    ?>
  </body>
</html>

