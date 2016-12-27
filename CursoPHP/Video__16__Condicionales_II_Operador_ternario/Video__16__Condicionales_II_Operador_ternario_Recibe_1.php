<!--
    @Created on : 22-dic-2016, 12:41:57
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
    <?php
    if (isset($_POST["enviando"])) {
//      Lo que viene del formulario con la contrasenia 
      $contra = $_POST["contra"];

      $nombre = $_POST["nombre_usuario"];

      //      OPERADOR TERNARIO 
//      echo $edad < 18 ? "Eres menor de edad " : "Eres mayor de edad ";
//      echo $edad;

      $resultado = $nombre == "Juan" && $contra == "123" ? "Acceder " : "No puedes Acceder";

      echo $resultado;
    }
    ?>
  </body>
</html>
