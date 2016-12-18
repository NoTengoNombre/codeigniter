<!--
    @Created on : 16-dic-2016, 18:27:30
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
    session_start(); // comienza la sesion
    echo 'Declaramos la SESSION<br>';
    if (!isset($_SESSION['contador'])) { // Si no esta fijada la sesion
      $_SESSION['contador'] = 0; // Sesion a 0
    }
    $_SESSION['contador'] ++; // 
//    $var = $_SESSION['contador'] ++; // devuelve integer
    echo "El numero de visitas es : " . $_SESSION['contador'];
    echo '<br>';
    echo "<a href='index2.php> Pagina 2 </a>";

    if ($_SESSION['contador'] == 3) {
      print 'REINICIO<br>';
//      $_SESSION['contador'] = 0;
      session_destroy(); // genera una nueva PHPSESSID con un identificador distinto
    }
    ?>
  </body>
</html>
