<!--
    @Created on : 12-ene-2017, 19:47:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Menu {

  private $arr_menu;

  public function __construct($arr) {
    $this->arr_menu = $arr;
  }

  /**
   * Devuelve un string con el formulario
   */
  public function construirMenu() {
    $ret_menu = "<nav><ul>";
    foreach ($this->arr_menu as $opcion) {
      $ret_menu .= "<li>" . $opcion . "</li>";
    }
    $ret_menu .= "</ul></nav>";
    return $ret_menu;
  }

}
?>
