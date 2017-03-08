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

  public static function unMetodoEstatico() {
    
  }

}

Foo::unMetodoEstatico();
$nombre_clase = 'Foo';
$nombre_clase::unMetodoEstatico(); // A partir de PHP 5.3.0

 