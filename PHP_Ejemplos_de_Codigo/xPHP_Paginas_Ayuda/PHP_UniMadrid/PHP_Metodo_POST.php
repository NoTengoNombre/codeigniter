<!--
    @Created on : 30-oct-2016, 18:32:59
    @Author     : RVS - N.F.N.D
    @Pag        : http://localhost/PHP_Home/PHP_Paginas_Ayuda/PHP_UniMadrid/PHP_Metodo_POST.php?nombre=d&apellidos=d
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>
    <form method='post' action="<?php echo $_SERVER['PHP_SELF'] ?>">
      Nombre:
      <input type="text" name="nombre">
      <br>
      Apellidos:
      <input type="text" name="apellidos">
      <br>
      <input type="submit">
    </form>
  </p>

  <?php
  if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])) {
      echo '<br>';
      $var0 = $_POST['nombre'];
      echo 'Valores Recibido = ' . $var0;
      echo '<br>';
      $var1 = $_POST['apellidos'];
      echo 'Valores Recibido =' . $var1;
      echo '<br>';
    }
  }
  ?>
</body>
</html>
