<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/jquery-3.1.1.min.js') ?>"></script>
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
  </ul>

  
  <hr>
  <!--Contenedor genera de pestañas-->
  <div class="col-sm-11 tab-content"  role="dialog"> 
    <!-- DISTINTAS VENTANAS -->
    <div role="tabpanel" class="tab-pane active" id="home">
      <table class="table table-hover">
          <?php
          echo '<div class="row">';
          echo anchor('control_adm_registros/show_add_user', 'Añadir usuario', ["class" => "btn btn-primary btn-large pull-left"]);
          echo "</div>";
          ?>

        <table border="1" align="center" class="table table-striped table-bordered dataTable"> 

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
        <div class="col-md-3 col-md-offset-0">
          <form method="POST" action="<?php echo base_url('control_adm_registros/insert') ?>">

            <div class="form-group">
              <label for="exampleInputEmail1">Nombres</label>
              <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="Nombres">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Documento Id</label>
              <input type="text" name="documento_id" class="form-control" id="exampleInputEmail1" placeholder="Documento Id">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Titulo</label>
              <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Notas</label>
              <textarea type="text" name="notas"
                        rows="2" cols="5" size="200"
                        class="form-control" id="exampleInputEmail1" placeholder="notas">
              </textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Estado</label>
              <input type="text" name="estado" class="form-control" id="exampleInputEmail1" placeholder="estado">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Captura</label>
              <input type="file" name="captura" class="form-control" id="exampleInputEmail1" placeholder="captura">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario Id</label>
              <input type="text" name="usuario_id" class="form-control" id="exampleInputEmail1" placeholder="usuario_id">
            </div>

            <button type="submit" class="btn btn-success">Registrar Documento
              <i class="glyphicon glyphicon"></i>
            </button>
          </form>

        </div>

        <div class="col-md-5"></div>

      </div>

    </div>

  </div>

</div>


<!------------ BOTONES ----------->
<div class="container">
  <div class="row">
      <?= anchor('admin/store_article', 'Add Post', ["class" => "btn btn-primary btn-large pull-right"]); ?>
  </div>
  <?php
  if ($feedback = $this->session->flashdata('feedback')) :
     $feedback_class = $this->session->flashdata('feedback_class');
     ?>
     <br>
     <br>
     <br>
     <div class="alert alert-dismissible <?= $feedback_class ?>">
         <?= $feedback ?>
     </div>
  <?php endif; ?>
  <div class="table-responsive">
    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Sr NO.</th>
          <th>Article</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php ?>
        <tr>
          <td>
            </form>
            <div class="btn-group">
              <a href="#" class="btn btn-info">View</a>
              <a class="btn btn-primary" href="">>Edit</a>
              <button type="submit" form="" value="" class="btn btn-danger">Delete</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                More <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Re Share</a></li>
                <li><a href="#">Purge From Cache</a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php
        echo "<tr><td colspan='3'>No Records Found</td></tr>";
        ?>
      </tbody>
    </table>

  </div>
</div>

<?php
$js = 'onclick="window.location=\'http://[::1]/ciproyecto/index.php/control_adm_registros/show_add_user\'"';
echo "<td align='left'><br>" . form_button('add_usuario', 'Añadir Usuario', $js) . "</td>";
?>
