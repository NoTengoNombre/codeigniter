
<?php

$this->load->library("form_validation");
$this->form_validation->set_rules('id', 'identificador', 'required | id_no:existe');
$this->form_validation->set_rules('password', 'Contraseña', 'required | min_length[5] | strtolower');

if ($this->form_validation->run() == FALSE) {
  $this->load->view('myform');
} else {
  $this->load->view('formsuccess');
}
?>
