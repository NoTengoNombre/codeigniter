<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mi_controlador extends CI_Controller {

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
  public function index() {
    $this->load->view('mi_vista');
  }

  public function get_view() {
    $this->load->view('hola_mundo_view');
  }

  public function get_view2() {
    $datos["titulo"] = "titulo Guapo";
    $datos["var1"] = 28;
    $this->load->view("titulo", $datos);
  }

}
