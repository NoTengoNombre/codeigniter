<?php
//pagina1.php

session_start();

//Contar el número de peticiones de un sólo usuario
//if (empty($_SESSION['count'])) {
// $_SESSION['count'] = 1;
//} else {
// $_SESSION['count'] ++;
//}

echo 'Bienvenido a la pagina #1';

//$numeroAleatorio = rand(1, 10);
//$_SESSION['numeroAleatorio'] = $numeroAleatorio;

$_SESSION['color'] = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante'] = time();

// Funciona si la cookie de sesion fue aceptada
echo '<br /><a href="PhpVariableSesion2.php">pagina 2</a>';

// Pasar por el ID de sesion , si fuera necesario
//echo '<br /><a href="PhpVariableSesion2?' . SID . '">pagina 2</a>';
?>


<p>
  Hola visitante, ha visto esta página <?php echo $_SESSION['count']; ?> veces.
</p>

<!--
<p>
  Para continuar, <a href="PhpVariableSesion2.php?<?php echo htmlspecialchars(SID); ?>">haga clic
    aquí</a>.
</p>
-->