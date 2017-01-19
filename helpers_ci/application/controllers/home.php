<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

Class Home extends CI_CONTROLLER {

  public function __construct() {
    parent::__construct();
    //cargamos nuestro helper y el helper url
    $this->load->helper(array('ayuda_helper', 'url'));
    $this->load->database('default');
  }

  //cargamos la vista home_view en la función index
  public function index() {
    $data = array('titulo' => 'Helpers con codeigniter');
    $this->load->view('home_view', $data);
  }

}

//end home.php controller