<?php

class Login_seguro extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('model_login_seguro');
  }

  /**
   * 1º Carga la vista 'view_login_seguro'
   */
  public function index() {
    $data['texto'] = "Bienvenido a nuestra web app 1";
    //  Creamos las reglas de validacion del formulario
    $this->load->view('view_login_seguro', $data); // cargo la vista 
  }

  /**
   * Crea objeto modelo 'model_login_seguro'
   * Invoca el metodo 'check_login'
   * 
   */
  public function check_login() {
    $this->load->library("form_validation");
    $this->form_validation->set_rules('usr', 'Usuario', 'required|min_length[1]');
    $this->form_validation->set_rules('pass', 'Password', 'required|min_length[1]');
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
    //  Comprueba si la validacion es correcta
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $this->load->model('model_login_seguro'); //crea objeto
      $datos_usuario = $this->model_login_seguro->check_login_modelo(
              $this->input->get_post("usr"), //datos vienen del formulario
              $this->input->get_post("pass")); //datos viene del formulario

      if ($datos_usuario != null) { // Usuario/contraseña correctos 
        $idusr = $datos_usuario["idusr"];
        $tipousr = $datos_usuario["tipousr"];
        $this->load->library('session'); // carga la libreria de session
//      Almacena dentro objeto 'session' -> iduser , tipouser, nombre
        $session = array(
            'idusr' => $idusr,
            'tipousr' => $tipousr,
            'nombreusr' => $this->input->get_post("usr"));
        $this->session->set_userdata($session);
        if ($tipousr == 1) {
          // Usuario convencional
          $this->load->view("panel_user");
        } else {
          // Usuario administrador
          $data["resultado"] = $this->model_login_seguro->get_all_users();
          $data["texto"] = "Todos los usuarios";
          $this->load->view("panel_admin", $data);
        }
      } else {
// Datos No correctos (login fallido) reenvia login
        $data['texto'] = "Bienvenido a nuestra web app 2";
        $data['error'] = "Nombre de usuario y/o contraseña incorrectos";
        $this->load->view('view_login_seguro', $data);
      }
    }
  }

}
