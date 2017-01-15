<!--
    @Created on : 30-oct-2016, 18:32:59
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : http://localhost/PHP_Home/PHP_Paginas_Ayuda/PHP_UniMadrid/PHP_Metodo_GET.php?nombre=d&apellidos=d
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>
    <form method='get' action="">
      Nombre:
      <input type="text" name="nombre" value="">
      <br>
      Apellidos:
      <input type="text" name="apellidos" value="">
      <br>
      <input type="submit" value="Enviar">
    </form>
  </p>

  <?php
  if (isset($_GET['nombre']) && isset($_GET['apellidos'])) {
    if (!empty($_GET['nombre']) && !empty($_GET['apellidos'])) {
      echo '<br>';
      $var0 = $_GET['nombre'];
      echo 'Valores Recibido = ' . $var0;
      echo '<br>';
      $var1 = $_GET['apellidos'];
      echo 'Valores Recibido =' . $var1;
      echo '<br>';
    }
  }
  ?>
</body>
</html>
