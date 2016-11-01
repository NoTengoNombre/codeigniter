<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class T2CrearClasesUsarThis {

// Declaración de propiedades (atributos)
  public $var = 'soy una variable de clase';

// Declaración de métodos
  public function mostrarVar() {
    echo $this->var;
  }

// • Si pones private falla
  public function resetVar() {
    echo $this->var = " <br> " . '#';
  }

}

// ------------------------------------
$miObjeto = new T2CrearClasesUsarThis();
$miObjeto->mostrarVar();
$miObjeto->resetVar();
?>





