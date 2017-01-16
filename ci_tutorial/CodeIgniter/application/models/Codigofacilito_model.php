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
   * Llamar a la bd y almacenar todos los datos
   * dentro de la variable query
   */
  function obtenerCursos() {
    $query = $this->db->get('cursos');
    if ($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }

  /**
   * db tiene las funciones de Active Record 
   * para trabajar con datos
   * @param type $data = datos para ingresar
   */
  function crearCurso($data) {
//    insert('tabla',array('NombreCampoDelRegistro'=>
    $this->db->insert('cursos', array(
        'nombreCurso' => $data['nombre'],
        'videosCurso' => $data['videos'])
    );
  }

}
