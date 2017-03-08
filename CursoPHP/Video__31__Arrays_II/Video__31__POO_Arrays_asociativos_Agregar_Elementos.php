<!--
    @Created on : 23-dic-2016, 10:14:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Variable : espacio de la memoria del ordenador  
                  donde se almacena un valor 
                  que cambiara en la ejecucion del programa
                  Array : una serie de variables indexadas que almacenan valores 
                  Array Asociativos : una serie de variables indexadas POR NOMBRES que almacenan valores 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    Asociar un nombre con una posicion
//    Almacena en la 1º posicion del array , queda identificada con indice 0
    $datos = array(
        "Nombre" => "Juan",
        "Apellido" => "Gomez",
        "Edad" => 21);

    echo $datos["Apellido"];
    echo '<hr>';

//    ALmacenar los datos de una consulta en un ARRAY
//    La mejor forma es en un array Asociativo
//    Cuando utilizamos nombre como la posicion , como el mismo nombre

    $datos = array("Nombre" => "Juan", "Apellidos" => "Gomez", "Edad" => 21);
    $datos["Pais"] = "España";

    foreach ($datos as $value => $indice) {
      echo $value . " tiene " . " el valor de : " . $indice;
      echo '<br>';
    }

    $semana = array("Valor", "Valor", "Valor", "Valor", "Valor");

    for ($i = 0; $i < count($semana); $i++) {
      echo $i . ' - ' . $semana[$i];
      echo '<br>';
    }

    echo '<hr>';
    echo '<hr>';

    $semana_2 = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

    sort($semana_2);

    for ($i = 0; $i < count($semana_2); $i++) {
      echo $semana_2[$i];
      echo '<br>';
    }
    
    ?>
  </body>
</html>








