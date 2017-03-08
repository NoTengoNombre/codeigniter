<!--
    @Created on : 21-dic-2016, 1:03:53
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


    if (isset($_SESSION)) {
      echo $_SESSION["nickname"];
      var_dump($_SESSION);
    } else {
      echo session_id();
    }
    ?>
  </body>
</html>
