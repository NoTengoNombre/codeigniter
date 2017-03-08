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
    if (!empty($_COOKIE["nombre_usuario"])) { // $_COOKIE - No esta vacio
      setcookie("nombre_usuario", $_COOKIE["nombre_usuario"], time() - 1);
      echo "Cookie reventada";
    } else {
//      Me redirige al login 
      header("Location: Video__67_Cookies_IV_Pagina_Web_Login.php");
    }
    ?>
  </body>
</html>
