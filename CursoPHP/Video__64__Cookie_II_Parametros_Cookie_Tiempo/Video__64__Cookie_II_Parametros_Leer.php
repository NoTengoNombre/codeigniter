<!--
    @Created on : 26-dic-2016, 20:35:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Cookie -> La genera el SERVIDOR , se guarda en tu ordenador
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    Crear una cookie
//     Cuando el navegador cargue esta pagina , navegador lee de arriba a abajo
//      cuando encuentre esta linea crea la cookie y se almacena
// • Para leer la Cookie usamos la variable superglobal COOKIE 
//    que es un ARRAY ASOCIATIVO
//    El navegador examinara la pagina , 
//    cuando llegue a este vera que es una COOKIE y la LEERA
//    Si no existe , dara error
    if (isset($_COOKIE["prueba"])) {
      echo $_COOKIE["prueba"];
      var_dump($_COOKIE);
    } else {
      echo 'No existe la cookie';
      var_dump($_COOKIE);
    }
    ?>
  </body>
</html>









