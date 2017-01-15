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
    $cadena = "abcdefghijklmnopqrstuvwxyz";
    $num = "a01234567890123456789012345";
    $var = strpos($cadena, $num);
    if ($var === false) {
      echo "La cadena '$num' no fue encontrada en la cadena '$cadena'";
    } else {
      echo "La cadena '$num' fue encontrada en la cadena '$cadena'";
      echo "posicion : $var";
    }
    echo '<hr>';
    $mystring = 'abc';
    $findme = 'a';
    $pos = strpos($mystring, $findme);
    if ($pos === false) {
      echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
    } else {
      echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
      echo " y existe en la posición $pos";
    }
    ?>
  </body>
</html>


