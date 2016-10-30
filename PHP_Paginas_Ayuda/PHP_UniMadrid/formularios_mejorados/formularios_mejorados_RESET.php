<!--
    @Created on : 30-oct-2016, 19:23:36
    @Author     : RVS - N.F.N.D
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
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
      <fieldset>
        <legend>Personalizar</legend>
        First Name : <input type="text" name="name1" value="">
        <br>
        Second Name : <input type="text" name="name2" value="">
        <br>
        <input type="submit">
        <input type="reset" value="reset" name="reset1">
      </fieldset>
    </form>
    <?php
    if (isset($_REQUEST['name1']) && isset($_REQUEST['name2'])) {
      $var1 = $_REQUEST['name1'];
      echo '<br> ';
      echo 'valores : ';
      echo $var1;
      $var2 = $_REQUEST['name2'];
      echo '<br> ';
      echo 'valores : ';
      echo $var2;
    }
    ?>
  </body>
</html>
