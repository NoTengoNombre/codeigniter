


<?php
session_start(); // primera llamada

function generarValor() {
 return $var = rand(0, 11);
}

$recibe = $_REQUEST['numero'];

//$_SESSION['numero'] = $_REQUEST['numero']; // almacena la variable numero
$_SESSION = generarValor(); // almacena la variable numero

$aleatorio = $_SESSION;
echo "valor aleatorio " . $aleatorio;
?>
<html>
  <head>
    <title>!! Problema !!</title>
  </head>
  <body>
      <?php
      echo "<br>";
      echo " El numero variable de sesion : " . $_SESSION;
      echo '<a href="./sessionEnvia.html" title=" !! Pincha aqui !! "> <br> Volver a la pagina </a>';
      ?>
  </body>
</html>
