<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function comprobar_usuario($email, $pass) {
    $r = $this->db->query("SELECT * FROM usuarios WHERE email = '$email' AND pass='$pass'");
    if ($r->num_rows() == 0) {
      return false;
    } else {
      return true;
    }
  }

  /**
   * Consulta
   * @return type
   */
  public function get_all_data() {
    $query = $this->db->query("SELECT * FROM usuarios");
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function get_all_data_active() {
    $query = $this->db->get('usuarios');
    if ($query->num_rows() > 0) {
      foreach ($query as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function insertar() {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO (id,nombre,email,password) VALUES ('" . $id . "','" . $nombre . "','" . $email . "','" . $password . "');";
    $this->db->query($sql);
    $valor = $this->db->affected_rows();
    if ($valor) {
      echo "Inserccion correcta";
    } else {
      echo "Inserccion NO CORRECTA";
    }
  }

  public function insertar_active() {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $data = array(
        'id' => $id,
        'nombre' => $nombre,
        'email' => $email,
        'password' => $password,
    );

    $this->db->insert('usuario', $data);

    $valor = $this->db->affected_rows();
    if ($valor) {
      echo "Inserccion correcta";
    } else {
      echo "Inserccion NO CORRECTA";
    }
  }

}
