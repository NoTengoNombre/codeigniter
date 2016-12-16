<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

/**
 * explode : Divide un string en varios string
 */
class Vista {

  /**
   * Metodo static tiene 
   * @param type $vista
   */
//  $vista = "errorLogin,formLogin";
//  
//  $listaVistas[0] = "errorLogin";
//  $listaVistas[1] = "formLogin";
//  
  public static function show($vista) { // Muestra todas las vistas que tengo almacenadas en el archivo 'vistas'
    include("vistas/header.php"); // Vuelca el contenido de las vistas
    include("vistas/nav.php");
//  Metodo explode : Recorre la cadena y trocea el codigo "divide el string en varios" 
    $listaVistas = explode(",", $vista);
    foreach ($listaVistas as $v) {
      include("vistas/$v.php");
    }
    include("vistas/footer.php");
  }

}
