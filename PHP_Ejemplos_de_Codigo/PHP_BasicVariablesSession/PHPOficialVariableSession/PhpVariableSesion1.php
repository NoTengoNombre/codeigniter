<?php

//pagina1.php

session_start();


echo 'Bienvenido a la pagina #1';


$_SESSION['numeroAleatorio'] = rand(1, 10);

$_SESSION['color'] = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante'] = time();

// Funciona si la cookie de sesion fue aceptada
echo '<br /><a href="PhpVariableSesion2.php">pagina 2</a>';
?>


