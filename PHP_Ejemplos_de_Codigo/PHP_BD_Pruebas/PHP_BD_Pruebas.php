<!--
    @Created on : 17-dic-2016, 17:27:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
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
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">  
      Nombre Usuario<br>
      <input type="text" name="usuario" value="">
      <input type="submit" name="enviar">
    </form>
    <?php
    include 'PHP_BD_seguridad.php';

    if (isset($_REQUEST['usuario']) || (isset($_REQUEST['enviar']))) {

      $s = new Seguridad();

      $objeto_mysql = new mysqli('localhost', 'root', '', 'videoclub');

      $usuario = $_REQUEST['usuario'];

      $sql = "SELECT tipo FROM usuarios WHERE user='$usuario';"; // saca 1 valor

      $consulta = $objeto_mysql->query($sql);

      while ($fila = mysqli_fetch_array($consulta)) { //sacar todos los resultados
        if (isset($fila)) {
          echo '<br>';
          echo 'Tipo de usuario : ' . $fila['tipo'];
          echo '<br>';
          if ($fila['tipo'] == '1') {
            echo '<b>Soy Administrador</b>';
            echo '<br>';
            echo '<br> ----- 0 <br>';
            $fila_recuperada = $fila['tipo'];
            var_dump($fila_recuperada);
            echo '<br>';
            echo "<b> • Valor del 'tipo' de la fila es</b>: " . $fila['tipo'];
            echo '<br>';
            $s->setTipoUsuario($fila_recuperada);
            $gtu = $s->getTipoUsuario();
            echo '<br>valor devuelto : ';
            var_dump($gtu);
          } else if ($fila['tipo'] == '0') {
            $tipo_usuario = $fila['tipo'];
            echo '<br>';
            echo 'Soy Usuario : ' . $tipo_usuario;
            echo '<br>';
            $s->setTipoUsuario($tipo_usuario);
            echo '<br>';
            var_dump($s);
            echo '<br>';
            $s->getTipoUsuario();
            var_dump($s);
          }
        } else {
          echo '<br>';
          echo 'No Hay filas';
        }
      }
    } else {
      echo '<br>';
      echo "Usuario no fijado";
    }
    ?>
  </body>
</html>
