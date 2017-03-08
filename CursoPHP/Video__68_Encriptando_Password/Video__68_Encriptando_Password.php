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
$2y 
$10 -> fuerza del cifrado
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
  <form action="Video__68_Encriptando_inserta_usuario.php" method="get">
    <table>
      <tr>
        <td>Usuarios</td>
        <td><input type="text" name="usu" id="usu"></td>
      </tr>
      <tr>
        <td>Contrasenia</td>
        <td><input type="text" name="password" id="password"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="enviando" value="!Dale">
        </td>
      </tr>
    </table>
  </form>
  <body>
    <?php
    ?>
  </body>
</html>













