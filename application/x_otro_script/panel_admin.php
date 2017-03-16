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

  <!-- GRUPO DE PESTAÑAS  -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#home" aria-controls="home" role="tab" data-toggle="tab">USUARIOS</a>
    </li>
    <li role="presentation">
      <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DOCUMENTOS</a>
    </li>  
    <li role="presentation">
      <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ARCHIVOS</a>
    </li>  
  </ul>

  <?php
//  Boton envio
  $js = 'onclick="window.location=\'http://[::1]/ciproyecto/index.php/control_adm_registros/show_add_user\'"';
  echo "<td align='left'><br>" . form_button('add_usuario', 'Añadir Usuario', $js) . "</td>";
  ?>
  <!--  <button type="button" class="btn btn-success" 
            onclick="<?php echo base_url("control_adm_registros/show_add_user") ?>">Sign Up
    </button>-->

  <hr>

  <!--Contenedor genera de pestañas-->
  <div class="tab-content"> 
    <!-- DISTINTAS VENTANAS -->
    <div role="tabpanel" class="tab-pane active" id="home">
      <table class="table table-hover">
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
                   . "<td>"
                   . "<img src='" . base_url("uploads") . "/" . $fila->fotografia . "'></td>"; // mostrar la fotografia
                   echo "<td><a href='http://[::1]/ciproyecto/index.php/control_adm_registros/show_usuarios_id/'>Modificar</a></td>";
                   echo "<td><a href='http://[::1]/ciproyecto/index.php/control_adm_registros/show_delete_user/'>Eliminar</a></td>";
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
    </div>

    <div role="tabpanel" class="tab-pane" id="profile">
      <div class="row">
        <div class="col-md-7">
          toda
          <form method="POST" action="<?php echo base_url('usuario/insert') ?>">

            <div class="form-group">
              <label for="exampleInputEmail1">Perfil</label>

              <select name="txtIdper" class="form-control">
                  <?php foreach ($selPerfil as $value) { ?>
                   <option value="<?php echo $value->per_id ?>"> <?php echo $value->per_nombre; ?> </option>    
                <?php } ?>
              </select>
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Nombres</label>
              <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="nombres">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Apellidos</label>
              <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Correo Electrónico</label>
              <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="correo">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="telefono">
            </div>  

            <button type="submit" class="btn btn-default">Registrar Usuario</button>

          </form>

        </div>
        
        <div class="col-md-5"></div>

      </div>

    </div>

  </div>

</div>
