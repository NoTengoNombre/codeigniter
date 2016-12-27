<!--
    @Created on : 26-dic-2016, 1:29:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : NAVEGADOR EMPIEZA A LEER DE ARRIBA A ABAJO 
Login.php -> formulario : se valida con la bd 
                  Si esta el usuario se redirige a una pagina pag1.php
                  Si no lo esta redirige a una pagina Prohibido.php
              Podemos hacer que este en un bucle repitiendo la entrada el login
- Usuario maria :  4qki5165fmrpc4185n3nk1kqq1
          asd : 4qki5165fmrpc4185n3nk1kqq1

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <style>
    h1 , h2{
      text-align: center;
    }
    table{
      width: 25%;
      background: #FFC;
      border: 2px dotted #F00;
      margin: auto;
    }

    .izq{
      text-align: right;
    }

    .titulo{
      text-align: left;
    }

    td{
      text-align: center;
      padding: 10px;
    }
  </style>
  <body>
    <?php
    if (isset($_POST["enviar"])) {
      try {
//    Este codigo sera el 1º en ejecutarse , creara una conexion
        $base = new PDO("mysql:host=localhost; dbname=x_pruebas", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    Ejecutara una sentencia SQL
        $sql = "SELECT * FROM usuarios_pass WHERE usuarios =:login AND password= :password";
        $resultado = $base->prepare($sql);
//    En la linea de login y de password encontrara un error PORQUE TODAVIA NO SE HAN GENERADO por 1º VEZ
//      SI ESTE codigo ESTARIA EJECUTANDO y TODAVIA NO SE HA CARGADO
        $login = htmlentities(addslashes($_POST["login"])); // convierte todo simbolo en html
        $password = htmlentities(addslashes($_POST ["password"])); // convierte todo simbolo en html
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute(); // setnencia sql ejecutada
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
          session_start();
          $_SESSION["usuario"] = $_POST["login"];
          header("Location:Video_62_Login_Sistema_Registro.php");
        } else {
          header("Location:Video_62_Login_Sistema_de_Login.php");
        }
      } catch (Exception $ex) {
        die("Error :  " . $ex->getMessage());
        echo "";
      }
    }
    ?>
    <h1>Introduce tus datos</h1>
    <!--Para que cargue la misma pagina y muestre las imagenes necesitamos la variable SuperGlobal $_SERVER 
Esta variable la metemos dentro de action donde queremos redirigir
    $_SERVER['PHP_SELF'] -> variable superglobal
    Cuando pulsamos boton de enviar hara una de la misma pagina en la que nos encontramos , escaneara la pagina
    y reenviará el codigo , luego comprobara si los valores son validos -->
    <!--<form action="Video__62__Login_Sistema_de_Login_III_Comprueba_Datos.php" method="post">--> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post"> 
      <table>
        <tr>
          <td class="izq">     
            Login:</td>
          <td class="titulo">
            <input type="text" name="login">  
          </td>
        </tr>
        <tr>
          <td class="izq">
            Password:</td>
          <td class="titulo">
            <input type="text" name="password">
          </td></tr>
        <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
      </table>
    </form>

    <h2>Contenido del Formulario Web 2</h2>
    <table width="800" border="1">
      <tr>
        <td><img src="https://3.bp.blogspot.com/-9IoEFG3ZV_Y/Vs3tMgT4ypI/AAAAAAABQRk/bcR_RxhXgLU/s1600/number-1.png" width="300" height="166"></td>
        <td><img src="http://www.printsur.com.es/wp-content/uploads/wpsc/product_images/Numeros%20MX%20Vinilo%20de%20Corte2-2.jpg" width="300" height="166"></td>
      </tr>
      <tr>
        <td><img src="https://ugc.kn3.net/i/origin/http://losnumeroseningles.net/wp-content/uploads/2012/11/numero31-300x225.jpg" width="300" height="166"></td>
        <td><img src="https://www.spreadshirt.es/image-server/v1/designs/14131366,width=178,height=178/decorado-numero-4-cuatro.png" width="300" height="166"></td>
      </tr>
    </table>
  </body>
</html>
