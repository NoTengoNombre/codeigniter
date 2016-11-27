<!--
    @Created on : 30-oct-2016, 9:49:03
    @Author     : RVS - N.F.N.D
    @Pag        : http://php.net/manual/es/language.oop5.static.php
    @version    :
    @TODO       : Debido a que los métodos estáticos se pueden invocar sin tener creada
una instancia del objeto, la seudovariable $this no está disponible dentro de los métodos declarados como estáticos.
-->

<?php

/**
 * Ejemplo : Incremento
 * @staticvar int $incremento
 */
function test() {
  static $incremento = 0;
  $incremento += 1;
  echo $incremento;
}

/**
 * Ejemplo : Recursividad 
 * @staticvar int $count
 */
function test1() {
  static $count = 0;
  static $c = 0;
  $count++;
  echo $count;
  if ($count < 10) {
    echo test1();
    echo '<br> | ♦ ' . $c++;
  }
  $count--;
}

test();
echo '<hr>';
test1();

