<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_Friend extends CI_Controller {

  public function index() {
    $this->load->view('hola_mundo_view');
  }

  public function otro_index() {
    $this->load->view('');
  }

  /**
   * 
   */
  public function set_view() {
    $this->load->view('hello_friend_view');
  }

  /**
   * Soy un metodo que ejecuta una vista
   */
  public function set_view1() {
    $this->load->view('mi_vista');
  }

}
