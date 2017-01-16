<!--
    @Created on : 12-ene-2017, 21:14:33
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('codigofacilito_model');
  }

  /**
   * Obtener todos los cursos insertados
   */
  function index() {
    $data['cursos'] = $this->codigofacilito_model->obtenerCursos(); //recibimos los datos de get
    $data->load->view('cursos/header');
    $data->load->view('cursos/cursos', $data);
  }

  function nuevo() {
    $this->load->view('cursos/header');
    $this->load->view('cursos/formulario');
  }

  function recibirDatos() {
    $data = array(
        'nombre' => $this->input->post('nombre'),
        'videos' => $this->input->post('videos')
    );
    $this->codigofacilito_model->crearCurso($data);
    $this->load->view('codigofacilito/header');
    $this->load->view('codigofacilito/bienvenido');
  }

}
