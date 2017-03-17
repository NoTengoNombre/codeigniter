<?php

class Model_user extends CI_Model {

   public function __construct() {
      parent::__construct();
   }
   
////////////////////////////////////////////////////   
////////////////////////////////////////////////////   
     public function user_add($data) {
      $this->db->insert("usuarios", $data);
      return $this->db->insert_id();
   }
////////////////////////////////////////////////////   
////////////////////////////////////////////////////   
   
     public function total_user() {
        $query = $this->db->get('usuarios'); 
        $total = $query->num_rows();
        return $total;
     }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   public function add_user($nombre, $apellidos, $password, $telefono, $email, $tipo, $fotografia) {

      $filas = $this->db->get('usuarios'); // Produce: SELECT * FROM usuarios
      $usuario_id = $filas->num_rows();

      $datos = array(
          'usuario_id' => ++$usuario_id,
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'email' => $email,
          'tipo' => $tipo,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
      );

//      Ejecuta la accion de insertar
      echo $this->db->insert('usuarios', $datos);
//      El objeto 'db' dice si tiene fila o no
      if ($this->db->affected_rows() == 1) {
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r; // devuelve string
   }

   /**
    * Formulario Ajax y JQUERY
    * @param type $data
    * @return type
    */
   public function add_user_($data) {

      $filas = $this->db->get('usuarios'); // Produce: SELECT * FROM usuarios
      $usuario_id = $filas->num_rows();

      $data = array(
          'usuario_id' => ++$usuario_id,
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'email' => $email,
          'tipo' => $tipo,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
      );
      
      $this->db->insert($this->table, $data);
      return $this->db->insert_id();
   }

   /**
    * 
    * @param type $usuario_id
    * @return string
    */
   public function update_user($usuario_id) {
      $datos = array(
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'email' => $email,
          'tipo' => $tipo,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
      );

      $this->db->where('usuario_id', $usuario_id);
      $this->update('usuarios', $datos);

      if ($this->db->affected_rows() == 1) {
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r;
   }

}
