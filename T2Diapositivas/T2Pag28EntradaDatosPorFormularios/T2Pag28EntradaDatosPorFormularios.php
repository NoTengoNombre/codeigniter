<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 21:41:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Ejemplo de procesamiento de datos de un formulario</h1>
    <div>
      <p>Prueba de datos</p>
      <?php
      $var0 = filter_input(INPUT_POST, 'nombre');
      echo "<br />";
      echo " - Nombre : " . $var0;
      $var1 = filter_input(INPUT_POST, 'apellidos');
      echo "<br />";
      echo " - Apellidos : " . $var1;
      ?>
    </div>
  </body>
</html>