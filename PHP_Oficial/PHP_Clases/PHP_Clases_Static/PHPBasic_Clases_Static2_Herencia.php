<!--
    @Created on : 30-oct-2016, 9:49:03
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/language.oop5.static.php
    @version    :
    @TODO       : Debido a que los métodos estáticos se pueden invocar sin tener creada
una instancia del objeto, la seudovariable $this no está disponible dentro de los métodos declarados como estáticos.
-->

<?php

class Foo {

  public static $mi_static = 'foo';

  public function valorStatic() {
    return self::$mi_static;
  }

}

class Bar extends Foo {

  public function fooStatic() {
    return parent::$mi_static;
  }

}

//print Foo::$mi_static . "\n";
//$foo = new Foo();
//print $foo->valorStatic() . "\n";
//print $foo->mi_static() . "\n"; // Propiedad mi_static no definida 
echo "<hr>";
////print $foo::$mi_static . "\n";
//$nombreClase = 'Foo';
//print $nombreClase::$mi_static . "\n"; //A partir de PHP 5.3.0


print Bar::$mi_static . "\n";
$bart = new Bar();
print $bart->fooStatic() . "\n";







