<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Este <?= $titulo ?></title>
  </head>

  <body>

    <table>
      <thead>
      <th>Nombre</th>
      <th>Email</th>
      <th>Ciudad</th>
      <th>Fecha de registro</th>
    </thead>
    <tbody>	
      <?php
//obtenemos los usuarios desde el helper ayuda_helper.php y los recorremos para mostrarlos
      $usuarios = get_users();
      foreach ($usuarios as $usuario) {
        ?>

        <tr>
          <td><?= $usuario->nombre ?></td>
          <td><?= $usuario->email ?></td>
          <td><?= $usuario->ciudad ?></td>
          <!--hacemos uso de la función invierte_date_time del helper que hemos creado-->
          <td><?= invierte_date_time($usuario->fecha) ?></td>
        </tr>

        <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>