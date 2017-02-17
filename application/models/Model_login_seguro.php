<?php

class Model_login_seguro extends CI_Model {

  /**
   * No necesita 
   * $this->load->database 
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * Consulta la BD con AR 
   * para sacar los datos
   * 
   * @param type $usr
   * @param type $pass
   * @return type ARRAY 
   */
  public function check_login_modelo($usr, $pass) {
// selecciono columna nombre , nombre usuario del form
    $this->db->where("nombre", $usr); // dato enviado al metodo check_login - Controlador
// selecciono columna password , password del form
    $this->db->where("password", $pass); // dato enviado al metodo check_login - Controlador
// selecciona tabla usuarios para hacer la consulta
    $r = $this->db->get("usuarios"); // SELECT (*) FROM 'usuarios'
    if ($this->db->affected_rows() > 0) { // si hay +1 fila
      foreach ($r->result() as $row) { // Columnas BD se sacan mediante objetos
        $datos_usuario['idusr'] = $row->usuario_id; // almaceno en array 'id' usuario
        $datos_usuario['tipousr'] = $row->tipo; // almaceno el 'tipo' usuario
      }
    } else {
//    var_dump($datos_usuario = null);
      $datos_usuario = null;
    }
//    var_dump($datos_usuario);
    //$datos_usuario['idusr'] 
    //$datos_usuario['tipousr']
    return $datos_usuario; //devuelve array objetos
  }

  /**
   * 
   * @return type todos los usuarios
   */
  public function get_all_users() {
    $query = $this->db->get("usuarios");
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
//      var_dump($data);
      return $data;
    }
  }

}
