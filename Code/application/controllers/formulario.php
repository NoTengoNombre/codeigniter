<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper(array('url', 'form'));
    $this->load->library(array('form_validation'));
  }

  function index() {
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('form_open');
//      $this->form_validation->set_rules('nombre', 'required|min_length[5]');
//      $this->form_validation->set_rules('email', 'correo electronico', 'required|valid_email');
//      $this->form_validation->set_rules('password', 'contraseña', 'required');
//      $this->form_validation->set_rules('repassword', 'reescribir contraseña', 'required|matched[password]');
//    } else {
      $this->load->view('exito_view');
    }
  }

}