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
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index() {
    $this->load->view('mi_vista');
  }

  public function otra_vista() {
    $this->load->view('otra_vista');
  }

  public function paquete() {
    $datos["titulo"] = "Titulo de la vista";
    $datos["var1"] = "Valor de la variable 1";
    $this->load->view('desempaquetar_array', $datos);
  }

  public function paquete2() {
    $datos["variable1"] = "Titulo";
    $datos["variable2"] = 11;
    $datos["variable3"] = $datos["variable1"];
    $datos["variable4"] = $datos["variable2"];
    $this->load->view('desempaquetar_array2', $datos);
  }

  public function formulario_helper() {
    $this->load->helper("form");
    echo form_open("action");
    echo form_input("nombre-input-text");
    echo form_submit("id", "enviar");
  }

  public function formulario_helper2() {
    $this->load->helper("form");
    echo form_open("action");
    $data = array('id' => '88', 'nombre' => 'pepe',
        'email' => "pepe@gmail.com", 'maxlengt' => '100',
        'size' => '50', 'style' => 'width:50%');
    echo form_input($data);
    echo form_submit('id','Pulsar');
  }

}
