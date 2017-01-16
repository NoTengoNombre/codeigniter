<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data["pagina"] = "login_form"; // array guardar datos
    $this->load->view('login_view', $data); // pantilla para pasar datos del array
//    $this->load->view('main_template', $data); // pantilla para pasar datos del array
  }

  /**
   * 
   */
  public function comprobar_login() {
    $this->load->library("form_validation"); // carga y crear formulario 
    $this->form_validation->set_rules("email", "Email", "required"); // fijar reglas de validacion
    $this->form_validation->set_rules("pass", "Password", "required|min_length[5]"); // fijar reglas de validacion
    $this->form_validation->set_message("required", "El campo %s es obligatorio"); // fijar mensaje
    if ($this->form_validation->run() == FALSE) { // formulario no esta corriendo - envia login
      $this->index(); // Envia a index del controlador
    } else {
      $this->load->model("login_model"); // carga formulario login
      if ($this->login_model->comprobar_usuario($_REQUEST['email'], $_REQUEST['pass'])) { // si son correctos
        $data["pagina"] = "main_app"; // almacena array los datos
        $this->load->view("main_template", $data); // muestra los datos en la vista
      } else {
        $this->index(); // envia al index
      }
    }
  }

}
