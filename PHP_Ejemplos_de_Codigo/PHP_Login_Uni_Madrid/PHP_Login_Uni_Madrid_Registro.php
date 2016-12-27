<!--
    @Created on : 21-dic-2016, 1:13:02
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
    <form action="procesarRegistro" method="post">
      <fieldset>
        <legend>Datos de nuevo cliente</legend>
        <p><label>NIF:</label><input type="text" name="nif" maxlength="10"></p>
        <p><label>Nombre :</label><input type="text" name="username" maxlength="30"></p>
        <p><label>Direccion :</label><input type="text" name="direccion" maxlength="50"></p>
        <p><label>Email :</label><input type="text" name="email" maxlength="30"></p>
        <p><label>Telefono :</label><input type="text" name="telefono" maxlength="15"></p>
        <p><label>Contrasenia :</label><input type="password" name="password" maxlength="40"></p>
        <button type="submit">Registro</button>
      </fieldset>
    </form>
    <?php
    include 'PHP_Login_Uni_Madrid_BD.php';
    if ($_SERVER["REQUEST_METHOD"] == "post") {
      $uname = limpia_sql(htmlspecialchars($_POST['nilf']));
      $pword = limpia_sql(htmlspecialchars($_POST['password']));
      $pLength = strlen($pword);
      if ($pLength >= 8 && $pLength <= 20) {
        $error = "";
      } else {
        $error = $error . "El password debe de tener entre 8 y 20 caracteres";
      }

      $nombre = limpia_sql(htmlspecialchars($_POST['username']));
      $direccion = limpia_sql(htmlspecialchars($_POST['direccion']));
      $email = limpia_sql(htmlspecialchars($_POST['email']));
      $telefono = limpia_sql(htmlspecialchars($_POST['telefono']));
    }

    if ($error = "") {
      $bd = new conectaBD();
      $query = "SELECT * FROM passwords WHERE usuario = $uname";
      $resultado = $bd->query($query);
    }
    ?>

  </body>
</html>
