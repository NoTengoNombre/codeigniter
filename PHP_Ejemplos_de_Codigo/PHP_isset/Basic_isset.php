<!--
    @Created on : 17-dic-2016, 14:25:42
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
    <form method='post' action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input type="text" name="valor" value="1">
      <input type="submit">
    </form>

  </body>
</html>

<?php
$valor = isset($_REQUEST['']);
var_dump($valor);
$valor1 = isset($_REQUEST['pepe']);
var_dump($valor1);
$valor2 = isset($_REQUEST['valor']);
var_dump($valor2);
?>