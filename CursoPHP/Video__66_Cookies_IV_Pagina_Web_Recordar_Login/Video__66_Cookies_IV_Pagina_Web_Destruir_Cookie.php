<!--
    @Created on : 27-dic-2016, 22:45:49
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Documento sin titulo</title>
    <style>
    </style>
  <body>
    <?php
//    include 'Video__66__Cookies_IV_Pagina_Web_Formulario.php';
//    include 'Video__66_Cookies_IV_Pagina_Web_Login.php';
    setcookie("nombre_usuario", "Maria1", time() - 1);
    echo "Cookie reventada";
//    var_dump($_COOKIE);
//
//    var_dump($_SESSION);
//    var_dump($_SERVER);
//    var_dump($_POST);
//    var_dump($_POST["login"]);
////    var_dump($_COOKIE["login"]);
////    var_dump($_COOKIE["0"]);
//    if ($_COOKIE['nombre_usuario'] == "Maria1") {
//      echo "Soy maria";
//    }
//    if (!empty($_POST["nombre_usuario"])) {
//      var_dump($_POST);
//      $variable = $_POST["usuario"];
//      setcookie("nombre_usuario", $variable, time() - 1);
//      echo "<br>Cookie reventada";
//    } else {
////      header("Location: Video__66__Cookies_IV_Pagina_Web_Formulario.php");
//    }
    ?>
  </body>
</html>
