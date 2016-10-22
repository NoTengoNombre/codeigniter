<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 21:53:30
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Error en la conexion </h1>
    <?php
    include_once './index.php';
    $var = $_REQUEST['usuario'];
    echo "El usuario <h1>" . $var . "</h1> se ha equivocado de contraseña";
    ?>
  </body>
</html>
