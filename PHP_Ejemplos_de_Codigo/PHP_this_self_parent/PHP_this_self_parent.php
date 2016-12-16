<!--
    @Created on : 27-nov-2016, 22:29:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://programacion.jias.es/2012/11/poo-en-php-this-parent/
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

    class MyClass {

      protected function myFunc() {
        echo "MyClass::MyFunc()\n";
      }

    }

    class OtherClass extends MyClass {

//      Sobreescritura de definicion parent
      public function myFunc() {
//      Pero todavia se puede llamar a la function parent
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
      }

    }

    $class = new OtherClass();
    $class->myFunc();

    /*
      La salida por pantalla será:
      MyClass::myFunc()
      OtherClass::myFunc()
     */
    ?>
  </body>
</html>
