<?php

class Control_users_registros extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('model_user');
   }

   public function user_add() {
 
      $data = array(
          'nombre' => $this->input->post('nombre'), 
          'apellidos' => $this->input->post('apellidos'), 
          'password' => $this->input->post('password'), 
          'password' => $this->input->post('password2'), 
          'email' => $this->input->post('email'), 
          'telefono' => $this->input->post('telefono'), 
          'tipo' => $this->input->post('tipo'));
      
      $insert = $this->model_user->user_add($data);
      echo json_encode(array("status" => TRUE));
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

   public function user_add_foto() {

//         Array con la configuracion de la foto
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '120';
      $config['max_width'] = '180';
      $config['max_height'] = '180';

//         Carga la libreria con la configuracion
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload()) { //do_upload devuelve false si produce error en el archivo
// Ha fallado la subida de la imagen
         $data['error'] = $this->upload->display_errors();

         $this->load->view("formularios/view_add_user", $data);
      } else {
// Obtenemos todos los datos del 'filename' de la imagen subida
         $upload_img_data = $this->upload->data(); //Array para obtener datos

         $upload_img_name = $upload_img_data['file_name']; //devuelve el nombre y extension de la imagen
//            Funcion add_user() se encarga de obtener los datos del formulario y enviarlos
         $r = $this->model_adm->add_user(
                 $this->input->post('nombre'), $this->input->post('apellidos'), $this->input->post('password'), $this->input->post('telefono'), $this->input->post('email'), $this->input->post('tipo'), $upload_img_name);

         if ($r == 'ok') {

            $data['mensaje'] = "Correcto";
            $this->load->view('formularios/view_add_user', $data);
         } else if ($r == 'error') {

            $data['mensaje'] = "Error";
            $this->load->view('formularios/view_add_user', $data);
         }
      }
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

//      public function con_user_add() {
//
//      $data = array(
//          'nombre' => $this->input->post('nombre'),
//          'apellidos' => $this->input->post('apellidos'),
//          'password' => $this->input->post('password'),
//          'telefono' => $this->input->post('telefono'),
//          'email' => $this->input->post('email'),
//          'tipo' => $this->input->post('tipo'),
//          $upload_img_name);
//
//// modelo
//      $insert = $this->Model_user->user_add($data);
//      echo json_encode(array("status" => TRUE));
//   }
}
