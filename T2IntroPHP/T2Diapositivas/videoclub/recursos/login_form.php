<?php
/*
 * @access.: public
 * @author.: Raul Vela
 * @example: Login modificado de la pagina oficial Netbeans
 * @see....: http://wiki.netbeans.org/UsandoPHPenNetBeans 
 */


// Valor Entrada del formulario equivalente al metodo $_POST
$op = filter_input(INPUT_POST, 'op');
// Si valor $op esta fijado AND $op es igual a 'login'
if (isset($op) && $op == "login") {
 //si tiene valor y es 'login'...
 $ok = validar_ingreso(); //validamos el ingreso
}
//sino.. mostrar el formulario
//$ok tendra TRUE si se logueo correctamente
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <title>Login Basico</title>
   </head>
   <body>
      <h1>Inicio de sesion</h1>
      <!--Otro script PHP para validar entrada--> 
      <?php
      if ($op && !$ok) { //si no se logueo correctamente, mostrar un mensaje de error
       print("Usuario o contraseña errónea");
      }
      ?> <!--Cierro Script PHP-->
      <!--Creo el formulario para hacer comprobaciones --> 
      <form method="post" action="<?php print(filter_input(INPUT_SERVER, 'PHP_SELF')); ?>">
         <input type="hidden" name="op" value="login"/>
         usuario:<input type="text" name="usuario"/><br/>
         contraseña: <input type="password" name="contrasenia"/><br/>
         <input type="submit" value="Entrar"/>
      </form>
   </body>
</html>

<!--Otro script PHP para validar entrada--> 
<?php

/**
 * 
 * @return boolean
 */
function validar_ingreso() {
//obtengo el parametro usuario del formulario...
 $usuario = filter_input(INPUT_POST, "usuario");
// y la contrasenia
 $contrasenia = filter_input(INPUT_POST, "contrasenia");
//nos conectamos a la base de datos por medio de un objeto
 $conn = new mysqli("localhost", "root", "", "videoclubprueba")
         or
         die($conn->connect_error);
//seleccionamos la base de datos
 $conn->select_db("videoclubprueba")
         or
         die($conn->connect_error);
//Creamos un comando SQL, notar que si pongo comillas dobles, el valor de las variables
//   son interpretadas como parte de la cadena
 $consulta = "SELECT * FROM usuarios WHERE user='" . $usuario . "' AND pass='" . $contrasenia . "'";
 $conn->query($consulta)
         or
         die($conn->connect_error);
//Devuelve el numero de filas afectadas por la última consulta INSERT, UPDATE, REPLACE or DELETE. 
 if ($conn->affected_rows) {
//inicio las variables de sesion...
  session_start();
// almaceno el valor del objeto en la sesion
  $_SESSION["usuario"];
//y redirecciono al index de la aplicacion
  header("Location: index_1.php");
// cierro la conexion a la base de datos
  $conn->close();
//termino todo correctamente
  return true;
 }
 // cierro la conexion a la base de datos
 $conn->close();
//si no devuelvo nada, la funcion retornara false.
}
