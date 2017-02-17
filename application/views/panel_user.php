<?php

echo "<h1>Bienvenido," . $this->session->userdata("nombreusr") . "</h1>";
echo "<h4>Estás dentro de la aplicación</h4>";
echo "<p>Se han creado las variables de session idusr =  "
 . $this->session->userdata("idusr") .
 " y tipousr = " . $this->session->userdata("tipousr") . "</p>";
// Si el controlador nos envía algún mensaje, lo mostramos

if (isset($error)) {
  echo "<div class='error'>$error</div>";
}

$this->load->helper("form");

echo "<div class='error'>" . validation_errors() . "</div>";
//echo form_open_multipart("users/add_user");

echo "<table align='center'>";
echo "<tr>";
echo "<td>" . form_label("Titulo documento", "titulo") . "</td>";
echo "<td><input type='text' name='nombre' value='" . set_value('titulo') . "'>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Fecha de Subida", "fecha_subida") . "</td>";
$valor = strftime("%G-%m-%d", date("u"));
echo "<td>" . $valor . form_input("fecha_subida", $valor) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Fecha de Impresión", "fecha_impresion") . "</td>";
echo "<td>" . form_input("fecha_impresion") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Notas de Interes", "notas") . "</td>";
echo "<td>" . form_input("notas") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . form_label("Captura de la Imagen", "captura") . "</td>";
echo "<td><input type='file' name='userfile' size='20' /></td>";
echo "</tr>";


echo "<tr>";
echo "<td align='right'><br/>" . form_submit('submit', 'Aceptar') . "</td>";
echo "<td align='left'><br/>" . form_button('back', 'Volver') . "</td>";
echo "</tr>";

echo "</table>";
