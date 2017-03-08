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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'post') {
      $uname = limpia_sql(htmlspecialchars($_POST["usuario"]));
      $pword = limpia_sql(htmlspecialchars($_POST["password"]));

//      Conexion a la BD tienda
      $bd = new conectaBD();
//      Comprueba si el registro (usuario , password ) esta en la BD
      $query = "SELECT * FROM password WHERE usuario = $uname AND password = md5($pword)";
      $resultado = $bd->query($query);
      $numregistros = $resultado->num_rows;

      if ($resultado) {
        if ($numregistros == 1) {
          $_SESSION["login"] = true;
          $_SESSION["usuario"] = $uname;
//          Mira en la bd cual es el nombre del usuario que se ha logueado
          $resultado->free();
          $query = "SELECT * FROM clientes WHERE nif = $uname";
          $resultado = $bd->query($query);
          $registro = $resultado->fetch_assoc();
          $_SESSION["nombreusuario"] = $registro["nombre"];
//          Crea un carrito de la compra para este usaurio en la session
          $_SESSION["carrito"] = new carrito($usuario);
        }
      }
      $query->free();
      $bd->close();
    }
    ?>
  </body>
</html>
