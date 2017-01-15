<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data["pagina"] = "login_view";
    $this->load->view("main_template", $data);
  }

  public function comprobar_login() {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("email", "Email", "required");
    $this->form_validation->set_rules("pass", "Password", "required|min_length[5]");
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $this->load->model("login_model");
      if ($this->login_model->comprobar_usuario($_REQUEST['email'], $_REQUEST['pass'])) {
        $data["pagina"] = "main_app";
        $this->load->view("main_template", $data);
      } else {
        $this->index();
      }
    }
  }

}


//library("form_validation") validacion del formulario en el servidor 
//form_validation = muestra formulario validacion
//login_model : envia a la bd