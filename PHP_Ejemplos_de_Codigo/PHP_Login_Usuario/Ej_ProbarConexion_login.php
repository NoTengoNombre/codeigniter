<!--
    @Created on : 15-dic-2016, 17:15:37
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : $_REQUEST : Un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.
                  Cuando se envía un formulario a un script de PHP, 
                  la información de dicho formulario pasa a estar automáticamente disponible en el script 
//                isset : Determina si esta definida
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h3>Login Usuario</h3>
    <?php
    if (!isset($_REQUEST[''])) {
      echo "Variables No definidas";
      echo '<a href="Ej_ProbarConexion_index.php">Redirige</a>';
    }
    if ((isset($_REQUEST['usuario']) == 'asd') && ((isset($_REQUEST['passwd']) == 'asd'))) {
      echo "Bienvenido";
    } else {
      echo "Nombre de Usuario o Contraseña Incorrecto";
      echo "<a href='Ej_ProbarConexion_index.php'>Volver</a>";
    }
    ?>
  </body>
</html>
