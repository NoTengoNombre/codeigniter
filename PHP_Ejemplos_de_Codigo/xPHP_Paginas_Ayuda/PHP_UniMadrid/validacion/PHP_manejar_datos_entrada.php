<!--
    @Created on : 30-oct-2016, 23:41:49
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/function.htmlspecialchars.php
    @version    :
    @TODO       :
-->

<!DOCTYPE HTML>  
<html>
  <head>
    <title></title>
  </head>
  <body> 
    <?php
    $nuevo = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $nuevo; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
    echo '<br>';
    $nuevo1 = strip_tags("<a href='test'>Test</a>");
    echo $nuevo1;
    echo '<br>';
    if (isset($_REQUEST['cliente']) && (!empty($_REQUEST['cliente']))) {
      $cliente = htmlspecialchars(trim(strip_tags($_REQUEST['cliente'])));
      echo "Datos de entrada : sin espacios ni caracteres especiales , quitando < > : ";
      echo '<br>';
      echo $cliente;
    } else {
      echo "No definido";
    }
    ?>
  </body>
</html>


