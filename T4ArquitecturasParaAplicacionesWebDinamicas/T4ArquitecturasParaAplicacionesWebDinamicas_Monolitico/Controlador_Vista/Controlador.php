<!--
    @Created on : 15-dic-2016, 21:52:19
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
    $db = new mysqli('localhost', 'root', '', 'portal');
    $result = $db->query("SELECT id_usuario , nombre_usuario FROM usuarios");

    $usuarios = array();

    while ($fila = $result->fetch_array()) {
      $usuarios[] = $fila;
      include './Vista.php';
    }

    $result->free();
    $db->close();
    ?>
  </body>
</html>
