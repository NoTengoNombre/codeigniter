<?php

//Vista : Carga FORMULARIO
if (isset($texto)) {
  echo "<h2>$texto</h2>";
}
if (isset($error)) {
  echo "<h4 style='color: red'>$error</h4>";
}

// CARGA EL FORMULARIO 
$this->load->helper("form"); 


echo form_open("login_seguro/check_login"); // Envia el Formulario al Controlador
echo form_label("Nombre de Usuario : ", "usr"); //crea Titulo Formulario
$data = array(
    'name' => 'usr',
    'value' => '',
    'maxlength' => '30',
    'size' => '30',
    'style' => 'width:10%');

echo '<br>';

echo form_input($data); // crea etiqueta elemento relacionado 
echo form_error("usr");

echo form_label("Password : ", "pass"); // crea etiqueta elemento relacionado 'pass'
//echo form_password("pass", ""); // crea etiqueta elemento relacionado
echo form_password('pass'); // crea etiqueta elemento relacionado
echo form_error('pass'); 
echo '<br>';
echo form_submit("enviar", "Entrar"); // crea elemento enviar
echo form_close();
