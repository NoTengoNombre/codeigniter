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
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body> 
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
      Texto : <br><input type="text" name="texto" value="">
      <br>
      <input type="submit">
    </form>

    <?php
    if (isset($_REQUEST['texto'])) {
      $var = $_REQUEST['texto'];
      echo $var;
    }
    ?>

  </body>
</html>