<!--
    @Created on : 24-nov-2016, 11:10:20
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
  </head>
  <body>
    <?php
    if ($_FILES["file"] > 0) {
      print_r($_FILES["file"]);
//      $archivo = $_FILES["file"];
//      $var = gettype($archivo);
//      echo '<br>';
//      foreach ($archivo as $value) {
//        print_r($value);
//      }
//      echo '<br>';
//      echo 'Tipo Recibido : ' . $var;
//      echo '<br>';
//      echo 'Archivo Recibido : ' . $archivo;
    }
    ?>
  </body>
</html>