<!--
    @Created on : 16-dic-2016, 16:37:52
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
//    Luego de eso, en otro script debes volver a llamar a la funcion session_start(); y usar la variable previamente grabada
//    Por ejemplo vamos a Grabar un Nickname en un Script y luego usarlo en otros 2 scripts
//session_start();
if (isset($_POST["txtusuario"])) {
  $_SESSION["nickname"] = $_POST["txtusuario"]; // NickName Grabado
}
if ($_SESSION["nickname"]) {
  $grabado = "El valor Grabado Previamente es : <strong> " . $_SESSION["nickname"] . "</strong><br>";
  "<a href='PHP_Session_Crea.php'>Pagina Crea Session</a>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php echo ($grabado); //El mensaje si hay nickname ?>
    <form action="" method="post">
      Escribe tu NickName:
      <input type="text" size="25" name="txtusuario" value="<?php echo $_SESSION['nickname']; ?>">
      <br>
      <input type="submit" value="Grabar">
    </form>
  </body>
</html>
