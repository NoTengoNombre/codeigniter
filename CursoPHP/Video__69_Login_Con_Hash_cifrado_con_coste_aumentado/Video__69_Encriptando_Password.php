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

    
$2y$10$5.8ALhgRSgO1G
$2y- hace referencia al algoritmo de cifrado
$10 -> coste del cifrazo , fuerza del cifrado , cuanto mayor es el numero mas fuerte es pero cuenta mas tiempo de descifrado

-Aumento coste - aumenta el consumo y recursos del hardware

timing attack - Romper cifrados para funciones antiguas -
Segun el tiempo en sg - sabes la longitud de la clave 


hash - contraseña cifrada de la base de datos
password_verify(contrasenia introducida por el usuario "valor de la constraseña" , hash "contrasenai cifrada de la bd");

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      table{
        width: 300px;
        margin: auto;
        background-color: #ffc;
        border: 2px solid #f00;
        padding: 5px;
      }

      td{
        text-align: center;
      }

      h1{
        text-align: center;
      }

    </style>
  </head>
  <h1>Registrate</h1>
  <form action="Video__69_Encriptando_inserta_usuario_aumentar_coste.php" method="get">
    <table>
      <tr>
        <td>Usuarios</td>
        <td><input type="text" name="login" id="login"></td>
      </tr>
      <tr>
        <td>Contrasenia</td>
        <td><input type="text" name="password" id="password"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="enviar" value="LOGIN">
        </td>
      </tr>
    </table>
  </form>
  <body>
    <?php
    ?>
  </body>
</html>













