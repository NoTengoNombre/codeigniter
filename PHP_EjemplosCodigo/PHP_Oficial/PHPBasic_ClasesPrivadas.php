<!DOCTYPE html>
<!--
    @Created on : 19-oct-2016, 21:57:56
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class MyClass {

      public $public = 'Public';
      protected $protected = 'Protected';
      private $private = 'Private';

      /**
       * 
       */
      function printHello() {
        echo $this->public;
        echo '<br />';
        echo $this->protected;
        echo '<br />';
        echo $this->private;
        echo '<br />';
      }

    }

//////////////////////////////////////////////////
    $obj = new MyClass();
    echo $obj->public;
//    echo $obj->protected; Error Fatal
//    echo $obj->private; Error Fatal
    $obj->printHello();

    /**
     * 
     */
    class MyClass2 extends MyClass {

      /**
       * Sobreescribir metodos public y protected , no private
       * @var type 
       */
      protected $protected = 'Protected2';

      /**
       * 
       */
      function printHello() {
        echo $this->public;
        echo $this->protected;
//        echo $this->private;  // ERROR
      }

    }

    $obj2 = new MyClass2();
    echo $obj2->public;
//    echo $obj2->protected; Error
//    echo $obj2->private; Error

    $obj2->printHello();
    ?>
  </body>
</html>
