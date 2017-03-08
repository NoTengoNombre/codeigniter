<?php

session_start(); // inicio sessiones
// Se asume como global $variable.
// No distinguiendo si es de sesión o de otro metodo
// Si fallase el inico de session, una $variable
// entrando por GET podria ser considerado  
// como la varaible de la sesión:
// lee_variable.php?variable=mi_valor_trampa

echo $variable;
?>


