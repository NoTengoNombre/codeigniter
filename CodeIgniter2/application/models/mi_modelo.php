<?php

class Mi_modelo extends CI_Model {

  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  /**
   * Consulta basica que realiza un select
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

  /**
   * Consulta con active record
   */
  public function get_all_data_active() {
    $query = $this->db->get('usuarios');
    if ($query->num_rows() > 0) {
      foreach ($query as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

  /**
   * 
   */
  public function get_all_data2() {
    $query = $this->db->query("SELECT * FROM usuarios");
//    var_dump($query);
    if ($query->num_rows() > 0) {
      foreach ($query->query() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

}
