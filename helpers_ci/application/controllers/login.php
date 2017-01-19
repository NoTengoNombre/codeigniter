<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

Class Login extends CI_CONTROLLER {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data["pagina"] = "login_view"; // 
    $this->load->view("main_template", $data);
  }

  public function comprobar_login() {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("email", "Email", "required");
    $this->form_validation->set_rules("pass", "Password", "required|min_length[5]");
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
    if ($this->form_validation->run() == FALSE) { // si el formulario falla
      $this->index(); // envia al indice
    } else { //sino
      $this->load->model("login_model"); //muestra login
      if ($this->login_model->comprobar_usuario($_REQUEST['email'], $_REQUEST['pass'])) {
        $data["pagina"] = "Bienvenido";
        $this->load->view("main_app", $data);
      } else {
        $this->index();
      }
    }
  }

}
