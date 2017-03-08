<!--
   @Created on : 28-dic-2016, 19:16:19
   @Author     : RVS - N.F.N.D - Home
   @Pag        :
   @version    :
   @TODO       :
Create Read Update Delete -> CRUD 

- Puede usar Bootraps
- Puede usar MVC
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      @charset "utf-8";
      h1{
        text-align: center;
      }
      .subtitulo{
        font-size: 12px;
      }

      body{
        background-color: #ffc;
      }

      table td{
        text-align: center;
        border: 1px #009 dotted;
      }

      table .sin{
        border: 0;
      }

      table .bot{
        padding: 0 5px;
        display: inline;
        border: 0;
      }

      table .primera_fila{
        font-size: 1.5em;
        text-decoration: underline;
        background-color: #fc3;
      }

      .centrado{
        text-align: center;
      }


    </style>
  </head>
  <body>

    <h1>ACTUALIZAR</h1>

    <?php
    include 'Video__77_CRUD_IIII_conexion.php';

    if (!isset($_POST["bot_actualizar"])) {
      $Id = $_GET["Id"]; // almacenamos los datos de la URL editar
      $nom = $_GET["nom"];
      $ape = $_GET["ape"];
      $dir = $_GET["dir"];
    } else { // SI LO HAS PULSADO
      $Id = $_POST["id"]; // almaceno lo que hay en el campo input hidden del form
      $nom = $_POST["nom"];
      $ape = $_POST["ape"];
      $dir = $_POST["dir"];

      $sql = "UPDATE DATOS_USUARIOS SET Nombre=:miNom, Apellido=:miApe,Direccion=:miDir WHERE Id=:miId;";
      $resultado = $base->prepare($sql);
      $resultado->execute(array(":miId" => $Id, ":miNom" => $nom, ":miApe" => $ape, ":miDir" => $dir));
      header("Location:Video__77_CRUD_IIII_index.php");
    }
    ?>
    <p>
    </p>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table width="25%" border="0" align="center">
        <tr>
          <td></td>
          <td><label for="id">Id</label>
            <input type="hidden" name="id" id="id" value="<?php echo $Id ?>"></td>
        </tr>
        <tr>
          <td>Nombre</td> 
          <td><label for="nom"></label>
            <input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
          <td>Apellido</td>
          <td><label for="ape"></label>
            <input type="text" name="ape" id="ape" value="<?php echo $ape ?>"></td>
        </tr>
        <tr>
          <td>Direccion</td>
          <td><label for="dir"></label>
            <input type="text" name="dir" id="dir" value="<?php echo $dir ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
