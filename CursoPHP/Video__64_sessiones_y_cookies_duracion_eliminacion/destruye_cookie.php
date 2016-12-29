<!--
    @Created on : 27-dic-2016, 12:57:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Dando 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    Destruir cookie poner -1 sg
    setcookie("duracion_cookie", "Esta es la informacion de nuestra 2º cookie : Duracion", time() - 1);
    var_dump($_COOKIE);
    ?>
  </body>
</html>
