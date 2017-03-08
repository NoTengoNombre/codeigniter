<!--
    @Created on : 28-dic-2016, 14:18:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

El mejor es : crypt()

Algoritmos de encriptacion
MD5 - md5()
SHA1 - sha1()
SHA256 - hash()
- MEJOR ALGORITMO ENCRIPTACION BLOWFISH -
BLOWFISH - funcion: crypt() -
         - funcion : password_hash() - mas facil de usar


-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $usuario = $_GET["usu"];
    $contrasenia = $_GET["password"];

//    PASSWORD_DEFAULT - SAL de forma automatica "RECOMENDADO"
    $pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);

    try {
      $base = new PDO('mysql:host=localhost; dbname=x_pruebas', 'root', '');
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");

      $sql = "INSERT INTO usuarios_pass ( usuarios , PASSWORD ) VALUES (:usu , :password)";

      $resultado = $base->prepare($sql);

      $resultado->execute(array(":usu" => $usuario, ":password" => $pass_cifrado));

      echo "Registro insertado";

      $resultado->closeCursor();
    } catch (Exception $ex) {
      echo "Linea de error " . $ex->getMessage() . " - " . $ex->getLine();
    } finally {
      $base = null;
    }
    ?>
  </body>
</html>













