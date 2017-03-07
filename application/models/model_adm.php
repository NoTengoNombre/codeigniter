<?php

class Model_adm extends CI_Model {

   public function __construct() {
      parent::__construct();
   }

   /**
    * Mostrar todos los usuarios
    * @return type Array "Objetos"
    */
   public function get_all_users() {
      $query = $this->db->get("usuarios"); // SELECT (*) FROM usuarios
      if ($query->num_rows() > 0) { // Si hay valores
         foreach ($query->result() as $fila) { // Saco los objetos
            $data[] = $fila; // Almaceno los OBJETOS dentro de un ARRAY
         }
         return $data; // Devuelve ARRAY de OBJETOS
      }
   }

   /**
    * Añade usuario tabla usuarios
    * Usa AR
    * 
    * @param type $usuario_id
    * @param type $nombre
    * @param type $apellidos
    * @param type $password
    * @param type $fotografia
    * @param type $telefono
    * @param type $email
    * @param type $tipo
    * @return string
    */
   public function add_user($usuario_id, $nombre, $apellidos, $password, $fotografia, $telefono, $email, $tipo = 0) {
      $datos = array(
          'usuario_id' => $usuario_id,
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
          'email' => $email,
          'tipo' => $tipo
      );
      $this->db->insert('usuarios', $datos);
      if ($this->db->affected_rows() > 0) { // si realizo la asignacion 
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r;
   }

   public function update_user($usuario_id, $nombre, $apellidos, $password, $fotografia, $telefono, $email, $tipo) {
      $datos = array(
          'usuario_id' => $usuario_id,
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
          'email' => $email);
   }

   /**
    * 
    * @param type $usuario_id
    */
   public function delete_user($usuario_id) {
      $this->db->where("usuario_id", $usuario_id);
      $this->db->delete("usuario");
      if ($this->db->affected_rows() > 0) {
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r;
   }

}
