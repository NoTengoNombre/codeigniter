<?php

//pagina2.php

session_start();

echo '<b>Bienvenido a la pagina #2<br></b>';

echo $_SESSION['numeroAleatorio'];
echo "<br>";
echo $_SESSION['color'];
echo "<br>";
echo $_SESSION['animal'];

//$_variable = $_SESSION['animal'];
//echo 'Soy un animal : ' + $_variable;

echo "<br>";
echo date('Y m d H:i:s', $_SESSION['instante']);

//Puede ser conveniente usar SID aqui , como hicimos en pagina1.php
echo '<br><a href="PhpVariableSesion1.php">pagina 1</a>';
?>

