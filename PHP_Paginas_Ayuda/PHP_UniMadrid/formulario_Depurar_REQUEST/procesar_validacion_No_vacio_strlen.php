<!--
    @Created on : 30-oct-2016, 20:29:39
    @Author     : RVS - N.F.N.D
    @Pag        : http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
    @version    :
    @TODO       :
-->
<!DOCTYPE HTML>  
<html>
  <head>
    <title></title>
  </head>
  <body> 
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
      Texto : <br><input type="text" name="texto" value="">
      <br>
      <input type="submit">
    </form>

    <?php
    if ((isset($_REQUEST['texto'])) && ((strlen($_REQUEST['texto']) > 0))) {
      print_r($_REQUEST);
      $var = $_REQUEST['texto'];
      echo 'Longitud total : ' . strlen($var);
    } else {
      echo "Sin Cadena";
      echo '<br>';
      print_r($_REQUEST);
    }
    ?>

  </body>
</html>