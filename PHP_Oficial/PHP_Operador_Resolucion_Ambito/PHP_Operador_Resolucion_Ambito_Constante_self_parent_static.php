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

    /**
     * Cuando una clase extendida sobrescribe la definición 'parent' de un método,
     *  PHP no invocará al método parent. 
     * Depende de la clase extendida el hecho de 
      llamar o no al método 'parent'.
     * 
      Esto también se aplica a definiciones de métodos
      Constructores y Destructores, Sobrecarga, y Mágicos.
     */
//Ejemplo #2 :: desde el interior de la definición de la clase
    class OtherClass extends MyClass {

      /**
       *
       * @var type static
       */
      public static $my_static = 'variable estatica';

      public static function doubleColon() {
        echo parent::CONST_VALUE . "\n"; //heredado del padre : MyClass
        echo self::$my_static . "\n"; // invocado desde el hijo
      }

    }

    $classname = 'OtherClass';
    echo $classname::doubleColon();

    OtherClass::doubleColon();
    ?>
  </body>
</html>
