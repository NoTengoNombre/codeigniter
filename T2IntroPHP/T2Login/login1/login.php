<!DOCTYPE>
<html>
  <head>
    <title>Login sencillo con PHP</title>
  </head>

  <body>

    <?php
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];

    if (($usuario == "asd") && ($p == "asd")) {
      echo "Bienvenido a la web, $usuario<br/>";
    } else {
      echo "Nombre de usuario o contraseña incorrecto<br/>";
      echo "<a href='..'>Volver</a>";
    }
    ?>
  </body>
</html>
