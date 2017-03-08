<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

//si no existe la función invierte_date_time la creamos
if (!function_exists('invierte_date_time')) {

  //formateamos la fecha y la hora, función de cesarcancino.com
  function invierte_date_time($fecha) {

    $day = substr($fecha, 8, 2);
    $month = substr($fecha, 5, 2);
    $year = substr($fecha, 0, 4);
    $hour = substr($fecha, 11, 5);
    $datetime_format = $day . "-" . $month . "-" . $year . ' ' . $hour;
    return $datetime_format;
  }

}

/**
 * 
 * Para poder hacer uso de todas sus funciones en cualquier lugar, 
 * sin necesidad de que tenga que ser un modelo o un controlador, 
 * también podríamos hacer por ejemplo $this->load-model(‘modelo’); 
 * y lo que necesitaramos dentro de este helper, 
 * 
 */
if (!function_exists('get_users')) {

  /**
   * Si no existe la funcion
   * @return type
   */
  function get_users() {
    //asignamos a $ci el super objeto de codeigniter
    //$ci será como $this
    $ci = & get_instance();
    $query = $ci->db->get('usuarios');
    return $query->result();
  }

}
//end application/helpers/ayuda_helper.php