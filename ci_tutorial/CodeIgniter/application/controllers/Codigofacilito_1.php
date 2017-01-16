<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helpers("form");
  }

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
    $this->load->library('menu', array('Inicio', 'Contacto', 'Cursos', 'Nuevo'));
    $data['mi_menu'] = $this->menu->construirMenu();
    $this->load->view('codigofacilito/header');
    $this->load->view('codigofacilito/bienvenido', $data);
  }

  public function hola_mundo() {
    $this->load->view('codigofacilito/header');
    $this->load->view('codigofacilito/bienvenido');
  }

  function nuevo() {
    $this->load->view('codigofacilito/header');
    $this->load->view('codigofacilito/formulario');
  }

  /**
   * Crear un array asociativo 
   * que manda los datos al modelo
   * 
   */
  function recibirDatos() {
    $data = array(
        'city' => $this->input->post('city'),
        'population' => $this->input->post('population')
    );
    $this->codigofacilito_model->crearCiudad($data);
    $this->load->view('codigofacilito/header');
    $this->load->view('codigofacilito/bienvenido');
  }

}
