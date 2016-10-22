<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 21:37:16
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h3>Login con orientación a objetos y sin acceso a BD</h3>
    <?php
    include_once 'login.php'; // vuelva el contenido del fichero 1 vez
    $login = new Login(); // instanciamos objeto clase 
    if (!isset($_REQUEST["usuario"])) {
      $login->showForm();
      echo "<br />";
    } else {
      $login->checkLogin();
    }
    ?>
  </body>
</html>
