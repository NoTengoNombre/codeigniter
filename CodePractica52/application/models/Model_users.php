<?php

class Model_users extends CI_Model {

  /**
   * Obtiene una lista con todos los usuarios actuales. Utiliza ActiveRecord.
   * @return un array con la tabla de usuarios completa.
   */
  public function get_all_users() {
    $r = $this->db->get("users");
    $list_users = array();

    foreach ($r->result_array() as $row) {
      $list_users[] = $row;
    }
    return $list_users;
  }

  /**
   * Inserta un usuario en la tabla de usuarios. Utiliza ActiveRecord.
   * @param username nombre del usuario
   * @param password contraseña del usuario
   * @param email email del usuario
   * @param telef telefono del usuario
   * @param img filename de la foto de perfil de usuario
   * @return un string conteniendo "ok" o "error", dependiendo del resultado de la inserción
   */
  public function add_user($username, $password, $email, $telef, $img) {
    $datos = array(
        'password' => $password,
        'email' => $email,
        'username' => $username,
        'telef' => $telef,
        'img' => $img
    );
    $this->db->insert('users', $datos);
    if ($this->db->affected_rows() == 1) {
      $r = "ok";
    } else {
      $r = "error";
    }
    return $r;
  }

}
