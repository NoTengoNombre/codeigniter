<!--
    @Created on : 20-dic-2016, 10:22:16
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
    <fieldset>
      <label>Nombre</label>
      <form id="form1" method="get" action="#">
        <input type="text" name="texto" value="">
        <input type="submit" name="enviar" value="enviar">
      </form>
    </fieldset>
    <?php
//    Si no tiene "nada" el $_GET -> devuelve "pepe"
    $name = (!empty($_GET["texto"]) ? $_GET["texto"] : "pepe");
    var_dump($name);
    echo $name;
    ?>
  </body>
</html>
