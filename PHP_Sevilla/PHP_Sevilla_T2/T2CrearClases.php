<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class miClase {

  public $var = "soy una variable de clase";

  public function mostrarVar() {
    echo $this->var;
  }

  private function resetVar() {
    $this->var = "";
  }

}

//objeto operador Clase
$miObjeto = new miClase();
$miObjeto->mostrarVar();
?>

<?php

class MiClase2 {

  public $var2 = "Soy otra variable de clase 2";

  /**
   * mostrar por pantalla valor de $var2
   */
  public function mostrarVar2() {
    echo $this->var2 . "<br> valor nuevo ";
  }

  /**
   * inicializa de nuevo la variable var a vacio
   */
  private function resetVar2() {
    $this->var2 = "Uso This";
  }

}

$miObjeto2 = new miClase2();
$miObjeto2->mostrarVar2();
?>






