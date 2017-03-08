<!--
    @Created on : 12-ene-2017, 0:36:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

class Mi_modelo extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_data() {
    $query = $this->db->query("SELECT * FROM city");
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function get_all_AR() {
    $query = $this->db->get('city');
    if ($query->num_rows() > 0) {
      foreach ($query as $row) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function get_all_AR2() {
    $this->db->select('*');
    $this->db->from('city');
    $this->db->join('country', 'city.ID = country.CODE');
    $query = $this->db->get();
  }

}
?>
