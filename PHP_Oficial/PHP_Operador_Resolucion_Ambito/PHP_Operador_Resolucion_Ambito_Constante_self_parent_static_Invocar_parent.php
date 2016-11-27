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

//    Ejemplo #3 Invocando a un método parent
    class MyClass {

      protected function myFunc() {
        echo "MyClass::myFunc()\n";
      }

    }

    class OtherClass extends MyClass {

      /**
       * Sobreescribir la definicion parent
       */
      public function myFunc() {
//        Pero todavia se puede llamar a la funcion parent
        parent::myFunc();
        echo '<br>';
        echo "OtherClass::myFunc()\n";
      }

    }

    $class = new OtherClass();
    $class->myFunc();
    ?>
  </body>
</html>
