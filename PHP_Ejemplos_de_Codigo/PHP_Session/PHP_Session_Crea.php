<!--
    @Created on : 16-dic-2016, 16:37:52
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
//    Esta variable estará disponible en cualquier otro script 
//    (pagina2.php, test.php, cualquierpagina.php) 
//    mientras el navegador
//    NO SEA CERRADO se podrá accesar a los datos grabados ahi.
//    • Lo primero es llamar a la funcion que 
//    Inicia/Continua la Sesion y desde ahi
//    ya puedes comenzar a grabar
    session_start();
    $array = array();
//    va = devuelve string
    $va = $_SESSION['nickname'] = "Jhonnyf";
    $va1 = $_SESSION['nickname'] = $array;
    echo '<hr>';
    echo gettype($va);
    echo '<hr>';
    $valor = $_SESSION;
    if ($valor) {
      echo '1º if';
    } else {
      echo "Sesion No creada" . $valor . session_name();
    }
    if (null) {
      echo 'no entro';
    } else {
      echo '<br>sale';
    }
    ?>
  </body>
</html>
