<style>
  .msg { color: green; text-align: center; }
  .error { color: red; text-align: center; }
</style>

<h4 align="center">Práctica de introducción a CodeIgniter</h4>
<h1 align="center">Agregar nuevo usuario</h1>

<?php
// Si el controlador nos envía algún mensaje, lo mostramos
if (isset($error))
  echo "<div class='error'>$error</div>";

$this->load->helper("form");

echo "<div class='error'>" . validation_errors() . "</div>";
echo form_open_multipart("model_login_seguro/add_user");

echo "<table align='center'>";
echo "<tr>";
echo "<td>" . form_label("Nombre de usuario", "nombre") . "</td>";
echo "<td>" . form_input("nombre") . "</td>";
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
echo "<td>" . form_label("Email", "email") . "</td>";
echo "<td>" . form_input("email") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Teléfono", "telefono") . "</td>";
echo "<td>" . form_input("telefono") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Foto de perfil", "fotografia") . "</td>";
echo "<td><input type='file' name='fotografia' size='20' /></td>";
//echo "<td>".form_input("img")."</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='right'><br>" . form_submit('submit', 'Aceptar') . "</td>";
echo "<td align='left'><br>" . form_button('volver', 'Volver') . "</td>";
echo "</tr>";

echo "</table>";
