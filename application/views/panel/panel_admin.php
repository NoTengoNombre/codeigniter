<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>
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
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a>
    </li>
    <li role="presentation">
      <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a>
    </li>  
  </ul>

  <?php
  $js = 'onclick="window.location=\'http://[::1]/ciproyecto/index.php/control_adm_registros/show_add_user\'"';
  echo "<td align='left'><br>" . form_button('add_usuario', 'Añadir Usuario', $js) . "</td>";
  ?>
  <button type="button" class="btn btn-success" 
          onclick="<?php echo base_url() . "/" . "control_adm_registros/show_add_user" ?>">Sign Up
  </button>

  <hr>

  <table border="1" align="center" class="table table-striped table-bordered"> 
    <thead>
      <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Teléfono</td>
        <td>Email</td>
        <td>Foto de perfil</td>

        <td  style="width: 125px;" colspan="3" align="center">Acciones</td>
      </tr>
    </thead>
    <tbody>
      <tr>
          <?php
          foreach ($resultado as $fila) {
             echo "<tr>"
             . "<td>" . $fila->nombre . "</td>"
             . "<td>" . $fila->apellidos . "</td>"
             . "<td>" . $fila->telefono . "</td>"
             . "<td>" . $fila->email . "</td>"
             . "<td><img src='" . base_url("uploads") . "/" . $fila->fotografia . "'></td>"; // mostrar la fotografia

             echo "<td><a href='http://[::1]/ciproyecto/index.php/control_adm_registros/show_usuarios_id/'>Modificar</a></td>";
             echo "<td><a href='http://[::1]/ciproyecto/index.php/control_adm_registros/show_usuarios_id/'>Eliminar</a></td>";

             echo "</tr>";
          }
          ?>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Teléfono</td>
        <td>Email</td>
        <td>Foto de perfil</td>
        <td  style="width: 125px;" colspan="3" align="center">Acciones</td>
      </tr>
    </tfoot>
  </table>
