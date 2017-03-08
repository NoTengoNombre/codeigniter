<!--
    @Created on : 27-dic-2016, 22:45:49
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Documento sin titulo</title>
    <style>
      h1 , h2 {
        text-align: center;
      }

      table{
        width: 25%;
        background-color: #ffc;
        border : 2px solid #f00;
        margin: auto;

        .izq{
          text-align: right;
        }

        .der{
          text-align: left;
        }

        td{
          text-align: center;
          padding: 1px;
        }

      }
    </style>
  </head>
  <body>
    <?php
//   1º Si se ha autenticado por 1º vez genera la cookie
    $autenticado = false; // si el usuario tiene existo en el login "usuario" , "password" - devuelve TRUE
//    checkBox - genera un setcookie(...) -> 2º si la cooki no lo ha creado aparece el login
//    Si la cookie existe no aparece el formulario

    if (isset($_POST["enviar"])) { // si ha pulsado el boton de enviar
      try {
        $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", ""); // conexion bd
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // fijar excepciones
        $sql = "SELECT * FROM usuarios_pass WHERE usuarios =:login AND password =:password"; // consulta
        $resultado = $base->prepare($sql); // ejecuta consulta
        $login = htmlentities(addslashes($_POST["login"])); //obtiene el login del formulario y lo crea como variable
        $password = htmlentities(addslashes($_POST["password"])); //obtiene el pass del form y lo guarda variable 
        $resultado->bindValue(":login", $login); // une el valor de la marca a la variable
        $resultado->bindValue(":password", $password); // une el vlaor de la marca a la variable
        $resultado->execute();
        $numero_registro = $resultado->rowCount(); // devuelve el total de filas afectadas
//         RESULTSET / RECORDSET
// si hay registros "usuario logueado" en la bd
        if ($numero_registro != 0) {
          $autenticado = true;

//         1º Aqui no entra porque no ha activado el checkbox
//          1º A) Entra porque si ha activado la casilla checkbox
          if (isset($_POST["recordar"])) {//Este formulario envia la informacion para comprobar si activo la casilla
//2º Si ha activado la cookie 
//2º tiene que almacenar un usuario , el tio que haya introducido el usuario
            setcookie("nombre_usuario", $_POST["login"], time() + 86400);
          }
        } else {
          echo "Error . Usuario o contraseña incorrectos";
        }
      } catch (Exception $ex) {
        die("Error: " . $ex->getMessage()); // captura error
      }
    }
    ?>

    <?php
    if ($autenticado == false) {//1ºSI NO TE HAS LOGUEADO Y SI NO HAS CRAEDO LA COOKIE
//1ºAL LOGUEARME LA PAGINA SE RECARGA
//2ºLA PAGINA RECARGADA AHORA ESTA $autenticado == true ,ahora se autenticado la pagina
//            La cookie no ha sido creada
//                         nombre de la cookie
      if (!isset($_COOKIE["nombre_usuario"])) {
        // muestra el formulario haya creado la cookie o no 
        include 'Video__66__Cookies_IV_Pagina_Web_Formulario.php';
      }
    }
    ?>
    <h2>Contenido de la web</h2>
    <table>
      <tr>
        <td><img src="http://www.soygrupero.com.mx/wp-content/uploads/red-number-1.jpeg" alt="1" width="200" height="100"></td>
        <td><img src="http://cliparts.co/cliparts/yTk/rL4/yTkrL4kgc.png" alt="2" width="200" height="100"></td>
      </tr>
      <tr>
        <td><img src="http://www.kidsmathgamesonline.com/images/pictures/numbers600/number3.jpg" alt="3" width="200" height="100"></td>
        <td><img src="http://www.drodd.com/images15/number4-12.png" alt="4" width="200" height="100"></td>
      </tr>
      <tr>
        <td>Casilla de verificacion</td>
      </tr>
    </table>
  </body>
</html>
