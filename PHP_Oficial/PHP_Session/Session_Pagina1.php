<!--
    @Created on : 14-nov-2016, 0:22:54
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : http://php.net/manual/es/function.session-start.php
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

    echo 'Bienvenido a la pagina #1 <br>';

    $_SESSION['color'] = 'verde';
    $_SESSION['animal'] = 'gato';
    $_SESSION['instante'] = time();

    echo '<br><a href="Session_Pagina2.php"> pagina 2 </a>';

    echo '<br><a href=Session_Pagina2.php?' . SID . '"> pagina 2 tiene añadido SID </a>';
    ?>
  </body>
</html>
