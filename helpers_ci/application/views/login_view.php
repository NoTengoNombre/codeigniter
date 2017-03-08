<?php

$this->load->helper("form"); //llamada al system/helper form para crear el formulario
echo form_open("login/comprobar_login"); // recibe los datos desde controlador Login
//Generamos el campo email del fomrulario
$data = array(
    'name' => 'email',
    'id' => 'email',
    'value' => '',
    'maxlength' => '100',
    'size' => '50');

$data['value'] = set_value('name');
echo form_label("Email: ");
echo form_input($data);
echo form_error('email');
echo '<br>';

//Generamos el campo password
echo form_label("Password");
echo form_password("pass");
echo form_error("pass");
echo '<br>';

//Generamos el boton del submit
echo form_submit("submit", "Entra");
echo form_close();