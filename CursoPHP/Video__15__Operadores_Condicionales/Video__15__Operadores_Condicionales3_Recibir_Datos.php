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
    <?php
//variable SUPERGLOBAL : formulario id="enviando"
    if (isset($_POST["enviando"])) {
//variable que almacena lo que tiene introducido en el formulario
      $edad = $_POST["edad_usuario"];

//      todos es un bloque : todos los if estan relacionados
      if ($edad <= 18) {
        echo "Eres menor de edad";
      } else if ($edad <= 40) {
        echo "Eres joven";
      } else if ($edad <= 65) {
        echo "Eres maduro";
      } else {
        echo "Eres viejo";
      }

// Estos if trabajan de forma independiente : No trabajan como bloque
//      Si se cumple la condicion '38' 
//      En este no entrara
      if ($edad <= 18) {
        echo "Eres menor de edad";
      }

//      En este entrara
// Estos if trabajan de forma independiente
      if ($edad <= 40) {
        echo "Eres joven";
      }

// Estos if trabajan de forma independiente
//      En este entrara
      if ($edad <= 65) {
        echo "Eres maduro";
      } else {
        echo "Eres viejo";
      }
    }
    ?>
  </body>
</html>
