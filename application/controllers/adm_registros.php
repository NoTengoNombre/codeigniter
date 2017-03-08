<?php

class Adm_registros extends CI_Controller {

   public function __construct() {
      parent::__construct();
   }

   function show_add_user() {
      $this->load->view('formularios/view_add_user');
   }

   public function add_user() {
      $this->load->model('model_login');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('nombre', 'Nombre de usuario', 'required');
      $this->form_validation->set_rules('password', 'Contraseña', 'required|matches[password2]');
      $this->form_validation->set_rules('password2', 'Confirmación de contraseña', 'required');

      $this->form_validation->set_message('required', 'El campo %s es obligatorio');
      $this->form_validation->set_message('matches', 'El campo %s debe coincidir con el campo %s');

      $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
      $this->form_validation->set_rules('telefono', 'Telefono', 'required|matches[password2]');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('fotografia', 'Fotografia', 'required');
      
      
   }

   public function add_message_user() {
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
