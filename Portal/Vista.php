<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

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

  /**
   * Tengo introducidas 2 vistas basicas
   * Otra lista de vistas introducidas pasada por parametro
   * 
   * @param type $vista
   */
  public static function show($vista) {
    include("vistas/header.php"); // Vuelca el contenido de las vistas
    include("vistas/nav.php");
    $listaVistas = explode(",", $vista);  
    foreach ($listaVistas as $v) {  
      include("vistas/$v.php");
    }
    include("vistas/footer.php");
  }

}
