<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
  </head>

  <body>

    <?php
    try {

      $login = htmlentities(addslashes($_POST["login"]));

      $password = htmlentities(addslashes($_POST["PASSWORD"]));

      $contador = 0;


      $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", "");

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      $sql = "SELECT * FROM usuarios_pass WHERE usuarios= :login";

      $resultado = $base->prepare($sql);

      $resultado->execute(array(":login" => $login));

      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        echo "Usuario: " . $registro['usuarios'] . " Contraseña: " . $registro['PASSWORD'] . "<br>";
        if (password_verify($password, $registro['PASSWORD'])) {
          $contador++;
        }
      }

      if ($contador > 0) {
        echo "Usuario Registrado";
      } else {
        echo "Usuario No Registrado";
      }

      $resultado->closeCursor();
    } catch (Exception $ex) {

      die("Error: " . $ex->getMessage());
    }
    ?>
  </body>
</html>