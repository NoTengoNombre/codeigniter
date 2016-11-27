<!--
    @Created on : 27-nov-2016, 17:44:07
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
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '');
    $registro = $dwes->exec('DELETE FROM stock WHERE unidades=0');
    print "<p>Se han borrado " . $registro . " registro </p>";
    
    ?>
  </body>
</html>
