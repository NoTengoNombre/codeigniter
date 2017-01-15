<!--
    @Created on : 15-ene-2017, 13:39:19
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
require_once ('../PHP_Clase_Uni_Sevilla.php');

class MiUsuario extends Usuario {

  public function unaFuncionCualquiera() {
//..... codigo
    echo parent::getNombreDeUsuario();
    echo parent::getFuncionStatica_Valor(1);
  }

//..... codigo
}


//objeto 2
$miusuario = new MiUsuario();
$miusuario->unaFuncionCualquiera();



