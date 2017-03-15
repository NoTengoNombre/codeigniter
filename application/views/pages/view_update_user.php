<?php echo current_url() ?>
<br>
<?php echo base_url() ?>
<br>
<?php echo site_url() ?>

<html>
  <head>
    <title>Actualizar datos</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "css/update.css" ?>">
  </head>
  <body>
    <div id="container">
      <div id="wrapper">
        <h1>Actualizar datos</h1><hr/>
        <div id="menu">
          <p>Pulsa en el boton de Menu</p>
          <!-- Fetching Names Of All Students From Database -->
          <ol>
              <?php foreach ($usuarios as $fila): ?>
               <li><a href="<?php echo base_url() . "index.php/control_adm_registros/show_usuarios_id/" . $fila->usuario_id; ?>">
                   <?php echo $fila->nombre; ?></a>
               </li>
            <?php endforeach; ?>
          </ol>
        </div>

        <div id="detail">
          <!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
          <?php foreach ($usuario_id as $fila): ?>
             <p>Editar y Actualizar</p><br>
             <form method="post" action="<?php echo base_url() . "index.php/model_adm/update_usuarios_id/$fila->usuario_id" ?>">

               <label>Usuarios_id :</label>
               <input type="text" name="usuario_id" value="<?php echo $fila->usuario_id; ?>">

               <label>Nombre :</label>
               <input type="text" name="nombre" value="<?php echo $fila->nombre; ?>">

               <label>Apellidos :</label>
               <input type="text" name="apellidos" value="<?php echo $fila->apellidos; ?>">

               <label>Password :</label>
               <input type="text" name="password" value="<?php echo $fila->password; ?>">

               <label>Fotografia :</label>   
               <input type="text" name="fotografia" value="<?php echo $fila->fotografia; ?>">

               <label>Telefono :</label>
               <input type="text" name="telefono" value="<?php echo $fila->telefono; ?>">

               <label>Email :</label>
               <input type="text" name="email" value="<?php echo $fila->email; ?>">

               <label>Tipo :</label>
               <input type="text" name="tipo" value="<?php echo $fila->tipo; ?>">

               <input type="submit" id="submit" name="submit" value="Actualizar">
             </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>
