
<?php

/**
 * explode : Divide un string en varios string
 */
class Vista {

  /**
   * Al metodo se le pasa un parametro que 
   * almacena un array de vista.  
   * el cual va a ir recorriendo y mostrando 
   *  
   * @param type $vista
   */
//  $vista = "errorLogin,formLogin";
//  
//  $listaVistas[0] = "errorLogin";
//  $listaVistas[1] = "formLogin";
//  
  public static function show($vista) {
    include("vistas/header.php");
    include("vistas/nav.php");
//  Recorre la cadena y trocea el codigo  
//  
    $listaVistas = explode(",", $vista);
    foreach ($listaVistas as $v) {
      include("vistas/$v.php"); // saca todas vista que tiene asociado el array
    }
    include("vistas/footer.php");
  }

}
