<?php

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function comprobar_usuario($email, $pass) {
    $r = $this->db->query("SELECT * FROM usuarios WHERE email = '" . $email . "' AND password = '" . $pass . "';");
    if ($r->num_rows > 0) {
      return false;
    } else {
      return true;
    }
  }

}
