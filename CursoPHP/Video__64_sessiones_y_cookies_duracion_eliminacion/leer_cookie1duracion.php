<!--
    @Created on : 26-dic-2016, 21:51:03
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
//    Si no especificamos donde debe trabajar la cookie , trabajara en el directorio y en los subdirectorios
    if ($_COOKIE["duracion_cookie"]) {
      echo $_COOKIE["duracion_cookie"];
      var_dump($_COOKIE);
    } else {
      echo 'No existe la cookie : ' . gettype($_COOKIE);
      var_dump($_COOKIE);
    }
    ?>
  </body>
</html>
