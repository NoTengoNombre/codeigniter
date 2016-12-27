<!--
    @Created on : 19-dic-2016, 18:35:11
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $nombre = "Juan";

// Ambito : no puedo acceder desde dentro a la variable hacia fuera
    function dameNombre() {

// Cambiar el ambito a una variable Global
//      Ahora puedo acceder a la variable fuera de la funcion
      global $nombre;

//    $nombre = "El nombre es " . $nombre; // devuelve Juan
      $nombre = "El nombre es " . $nombre = "Maria"; // devuelve Maria
    }

    dameNombre();

    echo $nombre;
    ?>
  </body>
</html>
