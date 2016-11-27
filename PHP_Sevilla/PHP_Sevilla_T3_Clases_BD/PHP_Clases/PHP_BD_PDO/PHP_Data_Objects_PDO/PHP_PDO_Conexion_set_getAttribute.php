<!--
    @Created on : 27-nov-2016, 16:45:28
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
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', '');
//   Obtener informacion del estado conexion 
    $version = $dwes->getAttribute(PDO::ATTR_SERVER_VERSION);
//    Modificar parametros afectan a la misma 
//  $version = $dwes->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
    ?>
  </body>
</html>
