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
      $edad = $_POST["edad_usuario"];

//      Condicional
//      if ($edad < 18) {
//        echo "Eres menor de edad , no tiene acceso";
//      } else {
//        echo "Eres mayor de edad , puedes acceder";
//      }
//      OPERADOR TERNARIO 
      echo $edad < 18 ? "Eres menor de edad " : "Eres mayor de edad ";

      echo $edad;
      
      
    }
    ?>
  </body>
</html>
