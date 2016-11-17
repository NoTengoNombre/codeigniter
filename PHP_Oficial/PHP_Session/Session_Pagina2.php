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
//    Session_pagina2.php

    session_start();

    echo 'Bienvenido a la pagina #2 <br>';

    echo '<hr>';
    echo $_SESSION['color'] = 'verde';
    echo '<hr>';
    echo $_SESSION['animal'] = 'gato';
    echo '<hr>';
    echo date('instante', $_SESSION['instante']);
    echo '<hr>';

//    Puede ser conveniente usar el SID aqui ,como hicimos en Session_pagina1.php

    echo '<br><a href="Session_pagina1.php">pagina 1</a>';
    ?>
  </body>
</html>
