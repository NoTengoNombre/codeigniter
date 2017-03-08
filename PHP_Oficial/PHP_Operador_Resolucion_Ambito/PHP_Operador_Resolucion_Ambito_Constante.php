<!--
    @Created on : 27-nov-2016, 22:44:49
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

//Ejemplo #1 :: desde el exterior de la definición de la clase
    class MyClass {

      const CONST_VALUE = 'Un valor constante';

    }

    $classname = 'MyClass';
    echo $classname::CONST_VALUE;
    ?>
  </body>
</html>
