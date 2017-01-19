<!--
    @Created on : 18-ene-2017, 23:15:15
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Hola_mundo extends CI_Controller {

  public function index() {
    $this->load->view("hola_mundo_view");
  }

  public function otro_metodo() {
    $datos["titulo"] = "Titulo del Login";
    $datos["contenido"] = "<img src='http://img.pngget.com/clip1/gxwjmaeud50.png' alt='b' width='300'></img> ";
    $datos["boton"] = "<button name='enviar' id='boton'>Pulsar</button> ";
      $this->load->view("desempaquetar_array3", $datos);
  }

}
?>
