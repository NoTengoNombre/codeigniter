<!--
    @Created on : 17-oct-2016, 0:15:18
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :Ejercicio 05: juego del número secreto
Construyamos ahora un programa PHP para jugar al típico juego del número secreto. 
El ordenador elegirá un número al azar entre 1 y 100, y luego nos pedirá que lo adivinemos. 
Si introducimos un número menor o mayor que el número secreto, el programa nos dará una pista (“el número secreto es mayor” o “el número secreto es menor”). 
Si acertamos, habremos ganado, y el programa nos dirá cuántos intentos hemos necesitado para adivinar el número.
-->
<?php
session_start(); // inicio de sesiones
if (empty($_SESSION['count'])) {
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count'] ++;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Juego del Numero Aleatorio </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
    <?php

    function generarValor() {
      return $var = rand(0, 10);
    }

    // • Parte del Servidor 
//       • SINO esta definido el numero aleatorio se crea de nuevo 
    if (!isset($_SESSION['valoraleatorio'])) {
      $_SESSION['valoraleatorio'] = generarValor();
    }

//       • Parte Cliente
    // • $_REQUEST -> valores $_POST , $_GET , $_COOKIE
    // • SI ESTA DEFINIDO EL NUMERO QUE VIENE DEL FORMULARIO
    if (isset($_REQUEST['numero1'])) {
      // • Almacena el valor en $valorRecibido
      $valorRecibido = $_REQUEST['numero1'];
      // • Almacena el valor de la variable de sesion 
      $valorAleatorio = $_SESSION['valoraleatorio'];
      //     ♦ Tabla
      echo "<br />";
      echo "<br />";
      echo "<table class ='nuevo2'>";
      echo "<th colspan='1' class='nuevo1'> Número Escrito </th>";
      echo "<tr>";
      echo "<td>" . $valorRecibido . "</td>";
//       echo "<td>" . $valorAleatorio . "</td>";
      echo "</tr>";
      echo "</table>";
      echo "<br>";

      $numero_contador = 1;
      $_SESSION['contador'] = $numero_contador;
      $con = $_SESSION['contador'];

//       Si falla poner !$valorAleatorio
      if ($valorAleatorio == $valorRecibido) {
        echo "<br />";
        echo "<b>♦ Numero Acertado ♦ </b>";
        echo "<br />";
        echo "<br />";
        echo " ♦ Numero de veces intentadas para descubrir el número secreto : " . $_SESSION['count'];
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<table class ='nuevo2'>";
        echo "<th colspan='2' class='nuevo1'> Número Secreto </th>";
        echo "<tr>";
        echo "<td> Numero Escrito : " . $valorRecibido . " </td>";
        echo "<td> Numero Secreto : " . $valorAleatorio . "</td>";
        echo "</tr>";
        echo "</table>";

        //     ♦ Tabla
        echo "<br />";
        echo "<br />";

        if ($_SESSION['count'] <= 3) {
          echo "<b> ✸ Felicidades ✸ </b>";
          echo "<br>";
          echo "Eres un maquina de la adivinación numerica ☻ <br> ";
          echo "<br>";
          echo '<a href="http://3.bp.blogspot.com/-l3-I4S23qZw/Te0x4EtU6ZI/AAAAAAAAAGI/ckwkKOKhB3U/s1600/premio.jpg" title="Premio"> <br> Mira tu premio </a>';
          echo "<br />";
        } else {
          echo "<br />";
          echo " ♥ Felicidades ♥ <br /> ";
          echo '<a href="http://1.bp.blogspot.com/-lrdZtl-TgSY/T1yrCzHvOVI/AAAAAAAAMmg/VXFur0_CWsE/s400/medalla.jpg" title="Premio"> <br> Mira tu premio </a>';
          echo "<br />";
        }
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', 0, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();
      } else {
        if ($valorRecibido < $valorAleatorio) {
          echo "<b> ♠ </b> Numero incorrecto • </b><br />";
          echo "<b>  ↑↑↑  </b> El valor es Menor con respecto al Número Secreto <br>";
          echo "<br />";
          echo '<a href="./ejercicio05.html" title="Ir la página anterior"> <br> Volver a la 1º Pagina </a>';
          echo "<br />";
        } else if ($valorRecibido > $valorAleatorio) {
          echo " <b> ♠ </b> Número incorrecto • <br />";
          echo " <b>  ↓↓↓  </b> El valor es Mayor con respecto al Número Secreto <br />";
          echo "<br />";
          echo '<a href="./ejercicio05.html" title="Ir la página anterior"> <br> Volver a la 1º Pagina </a>';
          echo "<br />";
        }
      }
    }
    ?>

  </body>
</html>
