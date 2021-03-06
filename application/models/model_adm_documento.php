<?php

class Model_adm_documento extends CI_Model {

   public function __construct() {
      parent::__construct();
   }

   /**
    * Ok!
    * Mostrar todos los usuarios
    * @return type Array "Objetos"
    */
   public function get_all_documentos() {
      $query = $this->db->get("documentos"); // SELECT (*) FROM usuarios
      if ($query->num_rows() > 0) { // Si hay valores
         foreach ($query->result() as $fila) { // Saco los objetos
            $data[] = $fila; // Almaceno los OBJETOS dentro de un ARRAY
         }
         return $data; // Devuelve ARRAY de OBJETOS
      }
   }

   /**
    * 
    * Añade documentos a la tabla 
    * 
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
   public function add_documentos($titulo, $telefono, $email, $tipo, $fotografia) {

      $filas = $this->db->get('documentos'); // Produce: SELECT * FROM usuarios
      $documentos_id = $filas->num_rows();

      $datos = array(
          'documentos_id' => ++$documentos_id,
          'titulo' => $titulo,
          'fecha_subida' => $apellidos,
          'fecha_impresion' => $password,
          'notas' => $notas,
          'estado' => $estado,
          'captura' => $captura,
          'usuario_id' => $usuario_id,
      );

//      Ejecuta la accion de insertar
      echo $this->db->insert('documentos', $datos);
//      El objeto 'db' dice si tiene fila o no
      if ($this->db->affected_rows() == 1) {
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r; // devuelve string
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

   /**
    * 
    * @param type $data
    * @return type objetos
    */
   function show_usuarios_id($data) {
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('usuario_id', $data);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
   }

   /**
    * 
    * @param type $id
    * @param type $data
    */
   function update_usuarios_id($id, $data) {
      $this->db->where('usuario_id', $id);
      $this->db->update('usuarios', $data);
   }

   /**
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
   public function update_user2($usuario_id, $nombre, $apellidos, $password, $fotografia, $telefono, $email, $tipo) {
      $datos = array(
          'nombre' => $nombre,
          'apellidos' => $apellidos,
          'password' => $password,
          'fotografia' => $fotografia,
          'telefono' => $telefono,
          'email' => $email,
          'tipo' => $tipo);

      $this->db->where('usuario_id', $usuario_id);
      $this->update('usuarios', $datos);

      if ($this->db->affected_rows() > 0) {
         $r = "ok";
      } else {
         $r = "error";
      }
      return $r;
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
