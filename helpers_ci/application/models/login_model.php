<!--
    @Created on : 20-ene-2017, 0:02:52
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function comprobar_usuario($email, $pass) {
    $r = $this->db->query("SELECT email , password FROM usuarios WHERE email='" . $email . "' AND password ='" . $pass . "';");
    if ($r->num_rows() < 0) {
      return false;
    } else {
      return true;
    }
  }

}
