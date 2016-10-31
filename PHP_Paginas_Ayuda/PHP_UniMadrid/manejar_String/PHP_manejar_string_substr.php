<!--
    @Created on : 30-oct-2016, 23:41:49
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<!DOCTYPE HTML>  
<html>
  <head>
    <title></title>
  </head>
  <body> 
    <?php
    for ($index = 0; $index < 3; $index++) {
      $v = rand(0, 25);
      print_r('Valores : ' . $v);
      $var = substr("abcdefghijklmnopqrstuvwxyz", $v);
      print_r('<h1>' . $var . '</h1>');
      echo "<script> function recarga(){ window.location.reload(); } </script>";
    }
    ?>
  </body>
  <button onclick="recarga()">B</button>
</html>


