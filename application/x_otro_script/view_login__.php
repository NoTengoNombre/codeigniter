<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>

<h1>Formulario de Registro</h1>

<?php
//Mensaje de texto enviado desde metodo index() del Controlador
if (isset($texto)) {
   echo "<h2>$texto</h2>"; // Muestra el mensaje "Bienvenido a nuestra web app 1"
}

//Mensaje de texto enviado desde metodo check_login() del Controlador
if (isset($error)) {
   echo "<h2>$error</h2>";
}
?>

<div role="tabpanel" class="tab-pane" id="profile">
  <div class="row"> 
    <div class="col-md-2">

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">

            <form method="POST" action="<?php echo base_url('login/check_login'); ?> ">
              
              <div class="form-group">
                <label for="formGroupExampleInput">Usuario</label>
                <input type="text" name="usr" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Repite Password 2</label>
                <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Repite Password">
              </div>

              <div class="form-group">
                <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
              </div>

              <?php echo form_close(); ?>
          </div>
          <div class="col-md-9">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
