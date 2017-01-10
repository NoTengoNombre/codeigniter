<!--
    @Created on : 06-ene-2017, 20:41:51
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

    class C {}
    
    class D extends C {}

    class E {}
      

    function f(C $c) {
      echo get_class($c) . "\n";
    }
    
    f(new C);
    f(new D);
//    f(new E);
    
    
    ?>
  </body>
</html>
