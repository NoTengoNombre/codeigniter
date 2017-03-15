<?php

class Model_adm extends CI_Model {

   public function __construct() {
      parent::__construct();
   }

   function show_usuarios() {
      $query = $this->db->get('usuarios');
      $query_result = $query->result(); // devuelve un array de objetos
      return $query_result;
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
   function update_usuarios_id($usuario_id, $data) {
      $this->db->where('usuario_id', $usuario_id);
      $this->db->update('usuarios', $data);
   }

}
