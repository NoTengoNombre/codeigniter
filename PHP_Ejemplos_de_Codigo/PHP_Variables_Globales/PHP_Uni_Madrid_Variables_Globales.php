<!--
    @Created on : 20-dic-2016, 16:30:37
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
    var_dump($GLOBALS);
    echo '<hr>';
    var_dump($_SERVER);
    echo '<hr>';
    var_dump($_GET);
    echo '<hr>';
    var_dump($_POST);
    echo '<hr>';
    var_dump($_FILES);
    echo '<hr>';
    var_dump($_COOKIE);
    echo '<hr>';
    var_dump($_REQUEST);
    echo '<hr>';
    var_dump($_ENV);
    echo '<hr>';

//    var_dump($_SESSION);
//    echo '<hr>';

    function show_var($var) {
      if (is_scalar($var)) {
        echo $var;
      } else {
        var_dump($var);
      }
    }

    $pi = 3.1416;
    $proteinas = array("hemoglobina", "citocromo c oxidasa", "ferredoxin");

    show_var($pi);
    show_var($proteinas)
    ?>
  </body>
</html>
