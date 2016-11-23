<!--
    @Created on : 22-nov-2016, 23:53:03
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.oop5.visibility.php
    @version    :
    @TODO       :
-->
<?php

class MiClase {

  private static $privado = "Privado 1";
  private static $privado2 = "Privado 2";

  function print_Hello() {
    echo MiClase::$privado;
  }

  static function print_Hello_static() {
    echo MiClase::$privado2;
  }

  private static function print_Hello_static2() {
    echo MiClase::$privado2;
  }

}

$obj = new MiClase();
$obj->print_Hello();
echo "<hr>";
MiClase::print_Hello_static();
