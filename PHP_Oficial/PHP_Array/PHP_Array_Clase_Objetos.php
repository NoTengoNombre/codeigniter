<!--
    @Created on : 30-oct-2016, 13:10:24
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class A {

  private $A; //  Este campo se convertirá en '\0A\0A'

}

class B extends A {

  private $A = "Private A"; // Este campo se convertirá en '\0B\0A'
  public $AA = "Public AA"; // Este campo se convertirá en 'AA'

}

var_dump((array) new B());

class AA {

  private $AA; //  Este campo se convertirá en '\0A\0A'

}

class BB extends AA {

  private $AA = ""; // Este campo se convertirá en '\0B\0A'
  public $AAA = ""; // Este campo se convertirá en 'AA'

}

var_dump((array) new BB());