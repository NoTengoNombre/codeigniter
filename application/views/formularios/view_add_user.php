<!-- view_add_user -->
<style>
  .msg { color: green; text-align: center; }
  .error { color: red; text-align: center; }
</style>

<h1 align="center">Panel de Registros</h1>
<h4 align="center">Agregar nuevo usuario</h4>

<?php
// Si el controlador nos envía algún mensaje, lo mostramos
if (isset($error)) {
   echo "<div class='error'>$error</div>";
}

$this->load->helper("form"); // Crea un formulario

echo "<div class='error'>" . validation_errors() . "</div>";
echo form_open_multipart("adm_registros/add_user");

echo "<table align='center'>";
echo "<tr>";
echo "<td>" . form_label("Nombre de usuario", "nombre") . "</td>";
echo "<td>" . form_input("nombre") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Apellidos de usuario", "apellidos") . "</td>";
echo "<td>" . form_input("apellidos") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Contraseña", "password") . "</td>";
echo "<td>" . form_password("password") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Repita su constraseña", "password2") . "</td>";
echo "<td>" . form_password("password2") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Teléfono", "telefono") . "</td>";
echo "<td>" . form_input("telefono") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Email", "email") . "</td>";
echo "<td>" . form_input("email") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Foto de perfil", "fotografia") . "</td>";

$data = array('type' => 'file', 'name' => 'fotografia', 'id' => 'fotografia');

echo "<td>" . form_input($data) . '</td>';
echo "</tr>";

echo "<tr>";
echo "<td align='right'><br>" . form_submit('submit', 'Aceptar') . "</td>";

$js = 'onClick="window.location=\'http://[::1]/ciproyecto/index.php/login/check_login\'"';
echo "<td align='left'><br>" . form_button('volver', 'Volver', $js) . "</td>";
echo "</tr>";
echo "</table>";
form_close();
