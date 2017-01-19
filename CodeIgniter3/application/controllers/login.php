<!--
    @Created on : 19-ene-2017, 0:37:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data["pagina"] = "login_view";
    $this->load->view("main_template", $data);
  }

  public function comprobar_login() {
    $this->load->library("form_validation"); // formulario
    $this->form_validation->set_rules("email", "Email", "required");
    $this->form_validation->set_rules("password", "Password", "required|min_length[5]");
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $this->load->model("login_model");
      if ($this->login_model->comprobar_usuario($_REQUEST['email'], $_REQUEST['password'])) {
        $data["pagina"] = "main_app";
        $this->load->view("main_template", $data);
      } else {
        $this->index();
      }
    }
  }

}
