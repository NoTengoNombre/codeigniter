<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enviar_array extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   * 	- or -
   * 		http://example.com/index.php/welcome/index
   * 	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   *         /index.php/mi_clase/metodo/parametros
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function enviar_dato() {
    $datos["titulo"] = "Recibe Datos desde Controlador";
    $datos["var1"] = "Valor de la variable 1";
    $this->load->view("titulo", $datos);
  }

  public function enviar_dato2() {
    $datos1["titulo1"] = "Recibe Datos desde Controlador";
    $datos1["var1"] = 29;
    $this->load->view("titulo_1", $datos1);
  }

}
