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
    try {

      $login = htmlentities(addslashes($_GET["login"]));

      $password = htmlentities(addslashes($_GET["password"]));

// 1º crear una variable contador para saber si el login esta en la bd
      $contador = 0;

      $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", "");

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT * FROM usuarios_pass WHERE usuarios= :login";

      $resultado = $base->prepare($sql);

//    Ejecutar la consulta 
      $resultado->execute(array(":login" => $login));
//    Array Asociativo
//    RECORRE UN RECORDSET , RESULTSET
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
//2º Creo un condicional 
//                    pass sin cifrar , pass cifrada desde la bd
        if (password_verify($password, $registro["PASSWORD"])) {

          $contador++; // Sabiendo la veces que ha ingresado el usuario
        }
      }

      if ($contador > 0) {
        echo "Usuario Registrado";
      } else {
        echo "Usuario No Registrado";
      }


//      echo "Usuario: " . $registro["usuarios"];
//      echo '<br>';
//      echo " Contrasenia " . $registro["PASSWORD"] . "<br>";
      $resultado->closeCursor();
    } catch (Exception $ex) {
      die(' • Error ' . $ex->getMessage());
    }
    ?>
  </body>
</html>













