<!-- Vista : FORMULARIO -->

<!-- Carga el css desde el directorio indicado -->
<link rel="stylesheet" type="text/css" href ="<?php echo base_url(); ?>css/style.css">
<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

<?php
//Mensaje de texto enviado desde metodo index() del Controlador
if (isset($texto)) {
   echo "<h2>$texto</h2>"; // Muestra el mensaje "Bienvenido a nuestra web app 1"
}

//Mensaje de texto enviado desde metodo check_login() del Controlador
if (isset($error)) {
   echo "<h2>$error</h2>";
}

// Carga la "funcion global" del formulario : no necesita objeto
$this->load->helper("form");

// Envia formulario a la funcion 'check_login' del Controlador
echo form_open("login/check_login");

echo form_label("Nombre de Usuario : ", "usr"); //crea Titulo Formulario
// parametros para el INPUT
$data = array(
    'name' => 'usr',
    'value' => '',
    'maxlength' => '20',
    'size' => '10');

// FORMULARIO
echo form_input($data); // crea etiqueta elemento relacionado 
echo form_error("usr"); // recoge mensaje requerido
echo '<br>';
echo form_label("Password : ", "pass"); // crea etiqueta elemento relacionado 'pass'
echo form_password('pass'); // crea etiqueta elemento relacionado
echo form_error("pass"); // recoge mensaje requerido  
echo '<br>';

echo form_label("Repita su constraseña : ", "password2") . "</td>";
echo form_password("password2");
echo form_error("password2"); // recoge mensaje requerido
echo '<br>';

echo form_submit("enviar", "Entrar"); // crea elemento enviar
echo form_close();

