<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/jquery-3.1.1.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mi_css.css">


<?php
echo "<h1>Bienvenido a la Aplicacion<br>"
 . $this->session->userdata("nombreusr") . "</h1>";

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
  <div class="col-sm-8 tab-content"  role="dialog"> 
    <!-- Pestaña 1 -->
    <div role="tabpanel" class="tab-pane active" id="home">
      <table class="table table-hover">
          <?php
          echo anchor('control_adm_registros/show_add_user', 'Añadir usuario con Funcion', ["class" => "btn btn-success pull-left"]);
          ?>

        <button class="btn btn-success" onclick="aniade_usuario()"><i class="glyphicon glyphicon-plus"></i>Añade Usuario</button>

        <!-- AQUI SE CORTA -->
        <!-- AQUI SE CORTA -->
        <!-- AQUI SE CORTA -->
        <!-- AQUI SE CORTA -->

        <table id="table_id" border="1" align="center"  class="table table-striped table-bordered dataTable"> 

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

                   echo '<center>';
                   echo '<td id="lapiz">' .
                   anchor('control_adm_registros/show_usuarios_id', '&nbsp', ["class" => "glyphicon glyphicon-pencil"]) . '</td>';
                   echo '<td id="basura">' .
                   anchor('control_adm_registros/show_delete_user', '&nbsp', ["class" => "glyphicon glyphicon-trash"]) . '</td>';
                   echo '</center>';
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
        <?php echo anchor('login/check_login', 'Volver', ["class" => "btn btn-primary btn-large pull-right"]); ?>
        <br><br><br><br>
        </div>

        <!-- Mis Librerias -->
        <script src="<?php echo base_url('public/jquery/jquery-3.1.0.min.js') ?>"></script>
        <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('public/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('public/datatables/js/dataTables.bootstrap.js') ?>"></script>
        <!-- Mis Librerias -->
        <script>

// FUNCION PARA ORDENAR DATOS
//           $(document).ready(function () {
////               $('#table_id').DataTable();
//           });

// Guarda la funcion que se va a ejecutar
           var save_method; //for save method string
           var table;

// Despliega la ventana modal del formulario
           function aniade_usuario()
           {
               save_method = 'add';
               $('#form')[0].reset(); // reset form on modals
               $('#modal_form').modal('show'); // show bootstrap modal
           }


           function save()
           {
               var url;
               if (save_method == 'add')
               {
                   url = "<?php echo site_url('index.php/control_users_registros/user_add') ?>"; // controlador
               } else
               {  
                   url = "<?php echo base_url('control_adm_registros/book_update') ?>"; // controlador
               }

               // ajax adding data to database
               $.ajax({
                   url: url,
                   type: "POST",
                   data: $('#form').serialize(),
                   dataType: "JSON",
                   success: function (data)
                   {
                       //if success close modal and reload ajax table
                       $('#modal_form').modal('hide');
                       location.reload();// for reload a page
                   },
                   error: function (jqXHR, textStatus, errorThrown)
                   {
                       alert('Error adding / update data');
                   }
               });
           }
           
        </script>

        <!---------------------------------------------------------------------------------->
        <!--------------------- 1º FORMULARIO CON JQUERY Y AJAX  --------------------------->
        <!---------------------------------------------------------------------------------->

        <!-- Bootstrap modal -->
        <div class="modal fade" id="modal_form" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 style="text-align: center"class="modal-title">Formulario para Añadir Usuario</h3>
              </div>

              <div class="modal-body form">
                <!-- Formulario Recoge los datos en el mismo script -->
                <form action="#" id="form" class="form-horizontal">
                  <!-- Formulario -->

                  <div class="form-body">

                    <div class="form-group">
                      <label class="control-label col-md-2">Nombre</label>
                      <div class="col-md-9">
                        <input name="nombre" placeholder="Introduce el Nombre" class="form-control" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Apellidos</label>
                      <div class="col-md-9">
                        <input name="apellidos" placeholder="Introduce los Apellidos" class="form-control" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Password</label>
                      <div class="col-md-9">
                        <input name="password" placeholder="Introduce el Password" class="form-control" type="password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Confirma Password</label>
                      <div class="col-md-9">
                        <input name="password2" placeholder="Introduce la Confirmacion" class="form-control" type="password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Email</label>
                      <div class="col-md-9">
                        <input name="email" placeholder="Introduce el Email" class="form-control" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2">Telefono</label>
                      <div class="col-md-9">
                        <input name="telefono" placeholder="Telefono" class="form-control" type="text">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-2">Tipo</label>
                      <div class="col-md-9">
                        <input name="tipo" placeholder="Introduce el Tipo" class="form-control" type="text">
                      </div>
                    </div>

<!--                    <div class="form-group">
                      <label class="control-label col-md-2">Fotografia</label>
                      <div class="col-md-9">
                        <input name="userfile" class="form-control" type="file">
                      </div>
                    </div>
                  </div>-->
                  
                </form>
                <!-- Fin Formulario -->

              </div>

              <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->

        <!---------------------------------------------------------------------------------->
        <!--------------------- 2º FORMULARIO DE DOCUMENTOS DE LA 2º PESTAÑA ------------------>
        <!---------------------------------------------------------------------------------->

        <!-- Pestaña 2 -->
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
            <div class="col-md-5 col-md-offset-0">
              <form method="POST" action="<?php echo base_url('control_adm_registros/insert') ?>">

                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres</label>
                  <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Documento Id</label>
                  <input type="text" name="documento_id" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Titulo</label>
                  <input type="text" name="titulo" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de Subida</label>
                  <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Fecha" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de Impresion</label>
                  <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Fecha" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Notas</label>
                  <textarea type="text" name="notas"
                            placeholder="Comentarios"
                            cols="5" maxlength="255"
                            class="form-control" id="exampleInputEmail1">
                  </textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Estado</label>
                  <input type="text" name="estado" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Captura</label>
                  <input type="file" name="captura" class="form-control" id="exampleInputEmail1">
                </div>

                <button type="submit" class="btn btn-success">Registrar Documento
                  <i class="glyphicon glyphicon"></i>
                </button>
                <?php echo anchor('login/check_login', 'Volver', ["class" => "btn btn-primary btn-large pull-right"]); ?>
                <br><br><br><br>
              </form>
            </div>
          </div>
        </div>
    </div>

  </div>

