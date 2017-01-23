<!--
    @Created on : 21-ene-2017, 0:46:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
(Nota: recuerda que, para que esta solución funcione, hay que configurar 
adecuadamente la aplicación mediante los 
archivos config.php, database.php y routes.php del directorio application/config)

referencia	Valor por defecto	Opciones	Descripción
upload_path	None	None	La carpeta destino donde será cargado el archivo; asegurese que la carpeta tenga permisos de escritura y la ruta empleada en la misma debe ser absoluta o relativa y no una URL.
allowed_types	None	None	El mime del archivo; si vas a especificar más de una debes de separarlos por pipes ('|').
file_name	None		El nombre que tendrá el archivo al ser depositado en la carpeta.
overwrite	FALSE	TRUE/FALSE (boolean)	TRUE para sobrescribir archivos con el mismo nombre en la carpeta destino y FALSE en caso contrario.
max_size	0	None	El máximo tamaño (en kilobytes) que puede tener el archivo. Establecer en cero para que no haya límites.
max_width	0	None	En el caso de imágenes, este valor indica la máxima anchura en píxeles que pueden tener las imágenes; cero para no establecer un límite.
max_height	0	None	En el caso de imágenes, este valor indica la máxima altura en píxeles que pueden tener las imágenes; cero para no establecer un límite.
max_filename	0	None	La máxima longitud que puede tener el nombre del archivo; cero para no establecer un límite.
encrypt_name	FALSE	TRUE/FALSE (boolean)	TRUE para que el archivo sea encriptado.
remove_spaces	TRUE	TRUE/FALSE (boolean)	TRUE para remover espacios en el nombre del archivo.
-->

<?php

class Users extends CI_Controller {

  /**
   * Muestra la vista principal de la administracion
   * de usuarios que consiste en la lista de usuarios
   * y los enlaces a 'borrar' , modificar y añadir
   */
  public function index() {
    $this->load->database();
    $this->load->model("model_users");
    $data["list_users"] = $this->model_users->get_all_users();
    $this->load->view("view_admin_users", $data);
  }

  /**
   * Muestra la vista con el formulario para 
   * añadir un nuevo usuario
   */
  public function show_add_user() {
    $this->load->view("view_add_user");
  }

  /**
   * Intenta la inserccion de un nuevo usuario BD
   * 1º Valida el formulario de inserccion
   * 2º Intenta subir la imagen de perfil
   * 3º LLama al modelo para realizar la inserccion
   */
  public function add_user() {
    // Cargamos el modelo y la librería de validación de formularios
    $this->load->model("model_users");
    $this->load->library('form_validation');

    // Establecemos las reglas de validación
    $this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
    $this->form_validation->set_rules('password', 'Contraseña', 'required|matches[password2]');
    $this->form_validation->set_rules('password2', 'Confirmación de contraseña', 'required');

    // Establecemos los mensajes de error para las reglas anteriores
    $this->form_validation->set_message('required', 'El campo %s es obligatorio');
    $this->form_validation->set_message('matches', 'El campo %s debe coincidir con el campo %s');

    // Comprobamos las reglas de validación
    if ($this->form_validation->run() == FALSE) {
      // La validación ha fallado: volvemos a mostrar el formulario indicando los errores
      $this->load->view("view_add_user");
    } else {
      // La validación ha sido un éxito. Continuamos el proceso de agregar el usuario.
      // Ahora configuramos la subida de la imagen del perfil del usuario)
      $config['upload_path'] = 'uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '1200';
      $config['max_width'] = '1200';
      $config['max_height'] = '1200';

      $this->load->library('upload', $config);

      // Intentamos subir la imagen al servidor
      if (!$this->upload->do_upload()) {
        // Ha fallado la subida de la imagen
        $data['error'] = $this->upload->display_errors();
        $this->load->view("view_add_user", $data);
      } else {
        // Obtenemos el filename de la imagen subida
        $upload_img_data = $this->upload->data();
        $upload_img_name = $upload_img_data['file_name'];

        // Pasamos todos los datos al modelo para que inserte el usuario en la BD
        $r = $this->model_users->add_user($this->input->get_post('username'), $this->input->get_post('password'), $this->input->get_post('email'), $this->input->get_post('telef'), $upload_img_name);

        // Generamos un texto con el resultado de la inserción
        if ($r == "ok")
          $data["result"] = "Usuario añadido con éxito";
        else if ($r == "user_exists")
          $data["result"] = "El nombre de usuario ya existe";
        else if ($r == "email_exists")
          $data["result"] = "El email ya existe";
        else
          $data["result"] = "Error desconocido al insertar al usuario. Inténtelo más tarde";

        // Mostramos el resultado de la inserción en la vista de usuarios
        $data["list_users"] = $this->model_users->get_all_users();
        $this->load->view("view_admin_users", $data);
      }
    }
  }

}
