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
//    datos que le llegan de editar desde la URL del index

    include './Video__72_CRUD_II_conexion.php';

    $Id = $_GET["Id"];

    $nom = $_GET["nom"];

    $ape = $_GET["ape"];

    $dir = $_GET["dir"];
    ?>

    <p>


    </p>
    <p>&nbsp;</p>
<!--La informacion del formulario se reenvia a este script -->
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <table width="25%" border="0" align="center">
        <tr>
          <td></td>
          <td><label for="id"></label>
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
