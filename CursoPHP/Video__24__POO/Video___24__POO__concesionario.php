<!--
    @Created on : 22-dic-2016, 18:40:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Objetivo : crear una clase accede a la base de datos y una lista de registros , filas , tuplas 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//      PHP Principal
//    Reutilizar el codigo para incluir el codigo de un archivo php independiente
    include ('Video__24__POO_vehiculos.php');

//    $mazda = new Coche; // no recibe parametros se puede poner asi 

    $pegaso = new Camion();
    $mazda = new Coche();

    $mazda->arrancar();
    $pegaso->arrancar();

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";
    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";
    ?>
  </body>
</html>
