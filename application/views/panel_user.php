<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_usuario.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<?php
echo "<h1 class='css'>Bienvenido<br>" . $this->session->userdata("nombreusr") . "</h1>";
echo "<h4>Estás dentro de la aplicación</h4>";
echo '<div class="panel"> ';
echo "<p>Se han creado las variables de session idusr =  "
 . $this->session->userdata("idusr") .
 " y tipousr = "
 . $this->session->userdata("tipousr") . "</p>";

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
echo "<td>" . form_input("fecha_subida", $valor) . "</td>";
echo "</tr>";

//echo "<tr>";
//echo "<td>" . form_label("Fecha de Impresión", "fecha_impresion") . "</td>";
//echo "<td>" . form_input("fecha_impresion") . "</td>";
//echo "</tr>";


$data = array(
    'name' => 'notas',
    'id' => 'notas_id',
    'value' => '',
    'rows' => '5',
    'cols' => '10',
    'style' => 'width:172px;height:79px;',
);

echo "<tr>";
echo "<td>" . form_label("Notas de Interes", "notas") . "</td>";
echo "<td>" . form_textarea($data) . "</td>";
echo "</tr>";


echo "<tr>";

echo "<td><br>" . form_submit('submit', 'Aceptar', "class='boton'") . "</td>";
echo "<td><br>" . form_button('back', 'Volver') . "</td>";
echo "</tr>";

echo "</table>";
echo '</div>';
