<!--
    @Created on : 22-dic-2016, 16:06:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Macros : Tareas Repetitivas - Funciones - Ejecuta Tareas definidas

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <div>Funciones Predefinidas : viene con el lenguaje PHP</div>
    <?php
    echo strtolower("CADENA CONVIERTE A MINUSCULA");
    echo '<br>';
    echo strtoupper("cadena convierte a mayuscula");
    echo '<br>';

    echo '<hr>';

    $palabra = "JUAN";

//    Funciones anidadas -> una funcion dentro de otra 
    echo (strtolower($palabra));
    echo '<hr>';
    echo (strtoupper($palabra));
    
    
    ?>
  </body>
</html>
