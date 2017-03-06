<?php

class Login_seguro extends CI_Controller {

  /**
   * Carga la vista 'view_login_seguro'
   */
  public function index() {
    $data['texto'] = "Bienvenido a nuestra web app 1";
    $this->load->view('view_login_seguro', $data); // carga la vista login_seguro
//  $this->load->view('css_js_view');
//    $this->load->view('view_add_user');
  }

  /**
   * Crea objeto 'form_validation'
   * Añade las reglas al formulario usuario
   * Envia el mensaje al formulario usuario
   * Invoca el metodo 'check_login'
   */
  public function check_login() {

//Cargo la libreria y creo el OBJETO - form_validation
    $this->load->library("form_validation");

//Fijo las reglas
    $this->form_validation->set_rules('usr', 'Usuario', 'required|min_length[1]');
    $this->form_validation->set_rules('pass', 'Password', 'required|min_length[1]');
    $this->form_validation->set_rules('password2', 'Confirmación de contraseña', 'required');

//Mensaje para las reglas    
    $this->form_validation->set_message("required", "El campo %s es obligatorio");
    $this->form_validation->set_message("matches", "El campo %s debe de coincidir con el campo %s");

//Si la validacion no es correcta
    if ($this->form_validation->run() == FALSE) {
      $this->index(); // regresa index
    } else { // validacion correcta
      $this->load->model('model_login_seguro'); //crea objeto modelo para invocar metodo check_login_modelo
      $datos_usuario = $this->model_login_seguro->check_login_modelo(
              $this->input->get_post("usr"),
              $this->input->get_post("pass"));

      if ($datos_usuario != null) { // Usuario/contraseña correctos - Entra Array String
        $idusr = $datos_usuario["idusr"];
        $tipousr = $datos_usuario["tipousr"];
        $this->load->library('session'); // Carga libreria Sessiones - Crea Objeto 
//Creo objeto $session , meto los 'String' -> iduser , tipouser, nombreusr como un 'Array'
        $session = array(
            'idusr' => $idusr,
            'tipousr' => $tipousr,
            'nombreusr' => $this->input->get_post("usr")); // funcion global - coge el usr
//Agregamos los datos y guardamos la cookie del usuario
        $this->session->set_userdata($session);

//Comparo el $tipousr          
        if ($tipousr == 1) {
          // Cargo la vista de Usuario convencional
          $this->load->view("panel_user");
        } else if ($tipousr == 0) {
          // Usuario administrador
          $data["resultado"] = $this->model_login_seguro->get_all_users();
          $data["texto"] = "Todos los usuarios";
          $this->load->view("panel_admin", $data); // carga todos los usuarios y texto
        }
      } else {
// Datos No correctos (login fallido) reenvia login
        $data['error'] = "Nombre de usuario y/o contraseña incorrectos";
        $this->load->view('view_login_seguro', $data);
      }
    }
  }

  public function add_user() {
    $this->load->library('form_validation');
    $data['title'] = 'Crear una peticion';
    $this->form_validation->set_rules('title', 'Título', 'required');
    $this->form_validation->set_rules('text', 'Texto', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('news/create');
      $this->load->view('templates/footer');

      $nombre = $this->input->get_post('nombre');
      $archivo = $this->input->get_post('fecha_subida');
      $notas = $this->input->get_post('notas');
    }
  }

}
