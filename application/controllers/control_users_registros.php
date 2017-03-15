<?php

class Control_users_registros extends CI_Controller {

   public function __construct() {
      parent::__construct();
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
