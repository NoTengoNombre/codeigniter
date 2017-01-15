<!--
    @Created on : 15-ene-2017, 13:00:35
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class A {

  private $a;

}

class B extends A {

  private $a;
  public $aa;

}

var_dump((array) new B());
?>
