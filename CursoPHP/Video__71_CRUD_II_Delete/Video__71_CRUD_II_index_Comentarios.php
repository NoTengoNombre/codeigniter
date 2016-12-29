<!--
    @Created on : 28-dic-2016, 19:16:19
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :


Create Read Update Delete -> CRUD 

- Puede usar Bootraps
- Puede usar MVC

Archivo hara : READ - CREATE

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      @charset "utf-8";
      /* CSS Document */
      h1{
        text-align:center;
      }
      .subtitulo{
        font-size:12px;
      }
      body{
        background-color:#FFC;
      }
      table td{
        text-align:center;
        border:1px #000099 dotted;
      }
      table .sin{
        border:0;
      }
      table .bot{
        padding:0 5px;
        display:inline;
        border:0;
      }
      table .primera_fila{
        font-size:1.5em;
        text-decoration:underline;
        background-color:#FC3;
      }
      .centrado{
        text-align:center;
      }
    </style>
  </head>
  <body>
    <?php
    include 'Video__71_CRUD_II_conexion.php';

//    $conexion1 = $base->query("SELECT * FROM datos_usuarios");
    $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); // ESTO HACE LO MISMO
    ?>


    <h1>CRUD<span class="subtitulo">
        <br>Create Read Update Delete</span>
    </h1>
    <table width="50%" border="0" align="center">
      <tr> <!-- Repetir los registros la cantidad de registro que haya en la bd y en la consulta -->
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellidos</td>
        <td class="primera_fila">Direccion</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <?php
// $registros = RESULTSET - Array con todos los objetos de la BD 
      foreach ($registros as $persona):
        ?>
        <!-- Por cada objeto que llamo persona repite el codigo que hay dentro del FOREACH-->
        <!--Inicio bucle para mostrar todos los registros de la base de datos-->
        <tr>
          <td><?php echo $persona->Id ?></td> <!-- id de la persona-->
          <td><?php echo $persona->Nombre ?></td> <!-- nombre de la persona-->
          <td><?php echo $persona->Apellido ?></td> <!-- apellido de la persona-->
          <td><?php echo $persona->Direccion ?></td> <!-- direccion de la persona-->
          <!--Localizar la etiqueta html donde este el boton de borrar - llamemos al archivo y le pasamos el ID -->
          <!--para eso creo un enlace a la pagina y le paso la URL al id  - le agrego un ? y el nombre del parametro 'id' y el valor -->
          <!--Tengo que pasarle el Id del boton que le hagamos pulsado-->
          <!--Para eso corto y abro otro enlace php -->
          <!--Boton a un enlace que dentro tiene una propiedad de un objeto con todos los registros de la consulta devuelta por el PDO -->
          <td class="bot"><a href="Video__71_CRUD_II_borrar.php?Id=<?php echo $persona->Id ?>"><input type="button" name="del" id="del" value="Borrar">
            </a></td>
          <td class="bot"><input type="button" name="up" id="up" value="Actualizar"></a></td>
        </tr>
      <?php endforeach; ?><!--Fin del bucle-->
      <tr>
        <td></td>
        <td>
          <input type="text" name="Nom" size="10" class="centrado"></td>
        <td>
          <input type="text" name="Ape" size="10" class="centrado"></td>
        <td>
          <input type="text" name="Dir" size="10" class="centrado"></td>
        <td class="bot">
          <input type="submit" name="submit" size="cr" class="Insertar" value="Insertar">
        </td>
      </tr>
    </table>
  </body>
</html>
