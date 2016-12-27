<!--
    @Created on : 19-dic-2016, 18:27:35
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
  <a href="datos_otros_sin_sobreescribir.php"></a>
</head>
<body>
  <?php
//  Se evita hacer sobreescritura para evitar fallos
  $nombre = "Juan";

// incluir el otro archivo
  include("datos_otros.php");

// llamada al metodo del otro script
  dameNombre();

//  Podria salir 'Maria' y dar error
//  Por eso aunque se haga un 'include' 
//  no añade el codigo dentro del script 'datos_otros' en este script
  echo $nombre;
  ?>
</body>
</html>
