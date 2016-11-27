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
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NANES utf8");
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', '', $opciones);
    $version = $dwes->getAttribute(PDO::ATTR_SERVER_VERSION);
    print "Version : $version";
    ?>
  </body>
</html>
