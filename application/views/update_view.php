<?php echo current_url() ?>
<br>
<?php echo base_url() ?>
<br>
<?php echo site_url() ?>

<html>
  <head>
    <title>Update Data In Database Using CodeIgniter</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "css/update.css" ?>">
  </head>
  <body>
    <div id="container">
      <div id="wrapper">
        <h1>Actualizar los datos</h1><hr/>
        <div id="menu">
          <p>Click en el Menu</p>
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
          <?php foreach ($usuarios as $fila): ?>
             <p>Editar Detalles & Click Boton para actualizar</p>
             <form method="post" action="<?php echo base_url() . "index.php/model_adm/update_usuarios_id" ?>">
               <label>Usuarios_id :</label>
               <input type="text" name="usuarios_id" value="<?php $fila->usuario_id ?>">

               <label>Nombre :</label>
               <input type="text" name="nombre" value="<?php $fila->nombre ?>">

               <label>Apellidos :</label>
               <input type="text" name="apellidos" value="<?php $fila->apellidos ?>">

               <label>Password :</label>
               <input type="text" name="password" value="<?php $fila->password ?>">

               <label>Fotografia :</label>
               <input type="text" name="fotografia" value="<?php $fila->fotografia ?>">

               <label>Telefono :</label>
               <input type="text" name="telefono" value="<?php $fila->telefono ?>">

               <label>Email :</label>
               <input type="text" name="email" value="<?php $fila->email ?>">

               <label>Tipo :</label>
               <input type="text" name="tipo" value="<?php $fila->tipo ?>">

               <input type="submit" id="submit" name="submit" value="Update">
             </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>
