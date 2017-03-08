<!--
    @Created on : 16-dic-2016, 16:37:52
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Esta variable estará disponible en cualquier otro script 
//                (pagina2.php, test.php, cualquierpagina.php) 
//                mientras el navegador
//                NO SEA CERRADO se podrá accesar a los datos grabados ahi.
//                • Lo primero es llamar a la funcion que 
//                Inicia/Continua la Sesion y desde ahi
//                ya puedes comenzar a grabar
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejemplos de sessiones PHP </title>
  </head>
  <body>    
    <h1>Ejemplos de sessiones con PHP</h1>

    <?php
    if (!isset($_SESSION['contador'])) {
      echo "<p>Bienvenido 1º vez </p>";
      $_SESSION['contador'] = 0;
    } else {
      $_SESSION['contador'] ++;
      echo "<p>Ya nos han visitado " . $_SESSION['contador'] . " veces </p>";
    }

    $s = $_SESSION['contador'];
    var_dump($s);

    echo session_id($s);


    if ($s == 10) {
      session_destroy();
    }
    ?>
  </body>
</html>
