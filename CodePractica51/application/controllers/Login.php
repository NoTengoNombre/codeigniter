<!--
    @Created on : 19-ene-2017, 0:37:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

/**
 * 
 */
class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  /**
   * 
   */
  public function index() {
    $data["pagina"] = "login_view"; // nombre de la vista a cargar en la vista 'main_template'
    $this->load->view("login_view", $data);
  }

  /**
   *  
   */
  public function comprobar_login() {
    $this->load->library("form_validation"); // librerias de formulario
    $this->form_validation->set_rules("email", "Email", "required");
    $this->form_validation->set_rules("pass", "Password", "required|min_length[3]");
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
//    fin del formulario
    if ($this->form_validation->run() == FALSE) { // Si formulario NO funciona
      $this->index(); // lanza la funcion indice del controlador
    } else { // sino 
      $this->load->model("login_model"); // carga el formulario
// llamada a la funcion del modelo
      if ($this->login_model->comprobar_usuario($_REQUEST['email'], $_REQUEST['pass'])) {
        $data["pagina1"] = "<h1 style='color:#45f'>Desde el Index del Controlador<h1>";
        $data["valor"] = "1";
        $data["imagen"] = "<img src='http://design.infurnia.com/register/images/tick.png' alt='img' width='100'>";
        $data["pagina"] = "main_app";
        $this->load->view("main_template", $data);
      } else {
        $this->index(); // lanza la funcion indice del controlador
      }
    }
  }

}
