<!--
    @Created on : 27-nov-2016, 23:01:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.oop5.basic.php#language.oop5.basic.class.this
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

// Ejemplo #5 Creación de nuevos objetos
    class Prueba {

      static public function getNew() {
        return new static;
      }

    }

    class Hija extends Prueba {
      
    }

    $obj1 = new Prueba();
    $obj2 = new $obj1;
    var_dump($obj1 !== $obj2);
    
    $obj3 = Prueba::getNew();
    var_dump($obj3 instanceof Prueba);

    $obj4 = Hija::getNew();
    var_dump($obj4 instanceof Hija);
    ?>
  </body>
</html>
