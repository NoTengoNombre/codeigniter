<!--
    @Created on : 21-dic-2016, 10:04:18
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
    include 'PHP_Login_Uni_Madrid_BD.php';
    $bd = conectaBD();
    $query = "SELECT * FROM passwords WHERE usuario = $uname";
    $resultado = $bd->query($query);
    
    
    
    
    ?>
  </body>
</html>
