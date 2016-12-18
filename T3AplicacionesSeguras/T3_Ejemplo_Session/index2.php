<!--
    @Created on : 16-dic-2016, 18:27:30
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
    session_start();
//    echo '2 script - Trae del otro script la variable $_SESSION<br>';
    echo "La variable de session vale <h1> " . $_SESSION['contador'] . '</h1>';
    echo "<a href='index.php'>Volver</a>";
    ?>
  </body>
</html>       

