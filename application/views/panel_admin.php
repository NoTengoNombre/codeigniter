<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<?php
echo "<h1>Bienvenido," . $this->session->userdata("nombreusr") . "</h1>";
echo "<h4>Estás dentro de la aplicación</h4>";
echo "<p>Se han creado las variables de session idusr =  "
 . $this->session->userdata("idusr")
 . " y tipousr = "
 . $this->session->userdata("tipousr") . "</p>";

// Si el controlador nos envía algún mensaje, lo mostramos
if (isset($result)) {
  echo "<table>"
  . "<tr>"
  . "<td>"
  . "<p class='msg'>$result</p>"
  . "</td>"
  . "</tr>"
  . "</table>";
}
?>
<hr>
<table border="1" align="center"> 
  <tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Teléfono</td>
    <td>Email</td>
    <td>Foto de perfil</td>
    <td colspan="3" align="center">Acciones</td>
  </tr>
  <tr>
    <?php
    foreach ($resultado as $fila) {
      echo "<tr>";
      echo "<td>" . $fila->nombre . "</td>"
      . "<td>" . $fila->apellidos . "</td>"
      . "<td>" . $fila->telefono . "</td>"
      . "<td>" . $fila->email . "</td>"
      . "<td><img src='" . base_url("uploads") . "/" . $fila->fotografia . "'/>FOTO</td>";
      echo "<td><a href='users/update_user/" . $fila->usuario_id . "'>Modificar</a></td>";
      echo "<td><a href='users/delete_user/" . $fila->usuario_id . "'>Eliminar</a></td>";
      echo "</tr>";
    }
    ?>
  </tr>
</table>

<?php
echo "<p align='center'><a href='" . base_url() . "'>Nuevo</a></p>";
?>

