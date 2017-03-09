<!--Poner Reglas Cascada 170 -->
<?php

class Control_adm_registros extends CI_Controller {

   public function __construct() {
      parent::__construct();
   }

   function show_add_user() {
      $this->load->view('formularios/view_add_user');
   }

   public function add_user() {
      
      $this->load->model('model_adm'); // invoca metodo del modelo
      $this->load->library('form_validation');

//      Cambia delimitadores de error en los formularios 
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

      $this->form_validation->set_rules('nombre', 'Nombre de usuario', 'required');
      $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
      $this->form_validation->set_rules('password', 'Contraseña', 'required|matches[password2]');
      $this->form_validation->set_rules('password2', 'confirmación de contraseña', 'required');
      $this->form_validation->set_rules('telefono', 'Telefono', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('tipo', 'Tipo', 'required');
      $this->form_validation->set_rules('userfile', 'Fotografia');
      
      $this->form_validation->set_message('required', 'El campo %s es obligatorio');
      $this->form_validation->set_message('matches', 'El campo %s debe coincidir con el campo %s');
      

      if ($this->form_validation->run() == FALSE) {
        
         $this->load->view('formularios/view_add_user');
         
      } else {

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
            
            // Obtenemos el filename de la imagen subida
            $upload_img_data = $this->upload->data(); //Array para obtener datos
            
            $upload_img_name = $upload_img_data['file_name']; //devuelve el nombre y extension de la imagen

//            Funcion add_user() se encarga de obtener los datos del formulario y enviarlos
            $r = $this->model_adm->add_user(
                    $this->input->get_post('nombre'), 
                    $this->input->get_post('apellidos'), 
                    $this->input->get_post('password'), 
                    $this->input->get_post('telefono'), 
                    $this->input->get_post('email'), 
                    $this->input->get_post('tipo'),
                    $upload_img_name);

            if ($r == 'ok') {
               $data['mensaje'] = "Correcto";
//               $this->load->view('templates/success', $data);
               $this->load->view('formularios/view_add_user', $data);
            } 
            else if ($r == 'error') {
               $data['mensaje'] = "Error";
//               $this->load->view('templates/errores', $data);
               $this->load->view('formularios/view_add_user', $data);
            }
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

}
