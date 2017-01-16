<!--
    @Created on : 12-ene-2017, 20:32:50
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {

  function __construct() {
    parent::__construct();
    $this->load->database(); //cargar la bd
  }

  /**
   * db tiene las funciones de Active Record 
   * para trabajar con datos
   * @param type $data = datos para ingresar
   */
  function crearCiudad($data) {
//    insert('tabla',array('NombreCampoDelRegistro'=>
    $this->db->insert('city', array('nombreCiudad' => $data['city'], 'poblacionTotal' => $data['population'])); 
  }

}
  