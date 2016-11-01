<!-- No fear No Distractions -->
<!-- T.E.D , I.T.W.T 

Ejercicio 01: positivo, negativo

Diseña un formulario –ejercicio01.html- con un campo de texto en el que puedas escribir
números. Al pulsar el botón de enviar debe llamar a un script –ejercicio01.php- que debe
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
    <!--action especifica donde enviar el formulario cuando se envie-->
    <!--PHP_SELF nombre del archivo script ejecutandose , relativa directorio raiz de documentos servidor--> 
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <!--name : Especifica nombre para un elemento de entrada sera referenciado mediante variable global get o post de PHP-->
      <!--value= Especifica valor elemento entrada : valor POST o GET del recurso solicitado-->
      Numero:<input type="number" name="numero" value="<?php ?>" /><br />
      <!--type = Tipo de elemento de entrada-->
      <!--name= valor para referenciarlo mediante variable global POST o GET en PHP-->
      <!--value=Especifica valor elemento entrada sera valor variable POST o GET recurso solicitado en la peticion-->
      <br>
      <input type="submit" name="envio" value="Pulsa el botón"/>
      <br>
    </form>
    <?php
//  • Aqui comprueba el envio
    if (isset($_REQUEST['envio'])) {
      if ($_REQUEST['numero'] != "" && $_REQUEST['numero'] > 0) {
        echo "<br>Positivo : " . $_REQUEST['numero'];
      } else {
        echo "<br><br>Negativo " . $_REQUEST['numero'];
      }
    }
    ?>
  </body>
</html>

