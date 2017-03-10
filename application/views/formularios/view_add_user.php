<!-- view_add_user -->
<style>
  .msg { color: green; text-align: center; }
  .error { color: red; text-align: justify; }
</style>

<h1 align="center">Panel de Administración</h1>
<h3 align="center">Agregar nuevo usuario</h3>

<?php
if (isset($error)) {
// Si el controlador nos envía algún mensaje, lo mostramos
   echo "<div class='error'>$error</div>";
}

if (isset($mensaje)) {
// Si el controlador nos envía algún mensaje, lo mostramos
   echo "<div class='msg'>$mensaje</div>";
}

$this->load->helper("form"); // Crea un formulario

echo form_open_multipart("control_adm_registros/add_user");

echo "<table align='center'>";
echo "<tr>";
echo "<td>" . form_label("Nombre de usuario", "nombre") . "</td>";
echo "<td>" . form_error('nombre') . "</td>";
echo "<td>" . form_input('nombre') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Apellidos de usuario", "apellidos") . "</td>";
echo "<td>" . form_error('apellidos') . "</td>";
echo "<td>" . form_input("apellidos") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Contraseña", "password") . "</td>";
echo "<td>" . form_error('password') . "</td>";
echo "<td>" . form_password("password") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Repita su constraseña", "password2") . "</td>";
echo "<td>" . form_error('password2') . "</td>";
echo "<td>" . form_password("password2") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Teléfono", "telefono") . "</td>";
echo "<td>" . form_error('telefono') . "</td>";
echo "<td>" . form_input("telefono") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Email", "email") . "</td>";
echo "<td>" . form_error('email') . "</td>";
echo "<td>" . form_input("email") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Tipo", "tipo") . "</td>";
echo "<td>" . form_error('tipo') . "</td>";
echo "<td>" . form_input("tipo") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Foto de perfil", "userfile") . "</td>";
echo "<td>" . form_error('userfile') . "</td>";
echo "<td><input type='file' name='userfile' size='20'></td>";
echo "</tr>";

echo "<tr>";
echo "<td align='right'><br>" . form_submit('submit', 'Aceptar') . "</td>";

$js = 'onclick="window.location=\'http://[::1]/ciproyecto/index.php/login/check_login\'"';
echo "<td align='center'><br>" . form_button('volver', 'Volver', $js) . "</td>";
echo "</tr>";


echo "</table>";
form_close();
