<?php

defined('BASEPATH') OR exit('No direct script access allowed');

echo '<h1 style="background-color : #09f">Cuerpo del Formulario</h1>';

$this->load->helper("form"); // crea el formulario

echo form_open("login/comprobar_login");

$data = array(
    'name' => 'email',
    'id' => 'email',
    'value' => '',
    'maxlength' => '100',
    'size' => '50'
);

$data['value'] = set_value('name');
echo form_label("Email: ");
echo form_input($data);
echo form_error('email');
echo '<br>';

//Generamos el campo password
echo form_label("Password: ");
echo form_password("pass");
echo form_error("pass");
echo "<br>";

//Generamos el boton de submit
echo form_submit("submit", "Entrar");
echo form_close();
