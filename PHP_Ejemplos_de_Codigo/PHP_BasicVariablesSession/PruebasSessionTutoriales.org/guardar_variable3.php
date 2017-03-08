<!DOCTYPE html>
<htm>
  <head>
    <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
    <title> Prueba Session </title>
  </head>
  <body>
    <!--Codigo PHP-->
    <?php
    session_start(); // inicio de sessiones
    session_register($variable); // registra $variable en session
    $variable = rand(0, 1); // el valor de la $variable se puede dar en cualquier momento
    echo $variable;
    ?>


  </body>
</htm> 

