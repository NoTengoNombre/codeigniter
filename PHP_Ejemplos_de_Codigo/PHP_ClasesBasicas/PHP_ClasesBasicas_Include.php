<!--
    @Created on : 28-dic-2016, 17:05:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.elcodigofuente.com/hacer-una-clase-en-php-class-553/
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include './PHP_ClasesBasicas.php'; //llamamos al archivo que contiene la clase
    $miestudiante = new Student; //Declaramos el Objeto del tipo Student

    $miestudiante->notas[0] = 10;
    $miestudiante->notas[1] = 15;
    $miestudiante->notas[2] = 16;
    $miestudiante->notas[3] = 18; //la variable notas en la clase es publica, as que podemos manipularla directamente
    
    $miestudiante->imprimir_notas(); //llamamos a la funcion que imprime las notas
    echo "<br>El promedio del estudiante <strong>" . $miestudiante->nombre . "</strong> es: "; //imprimos un mensaje con el nombre del estudiante
    echo $miestudiante->promedio(); //llamamos a la funcion que im
    ?>
  </body>
</html>
