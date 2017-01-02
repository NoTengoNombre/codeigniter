<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CRUD</title>
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
    include 'Video__73_CRUD_III_conexion.php';

    $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); // ESTO HACE LO MISMO
//Si has pulsado el boton cr - procesa la informacion- NO AL CARGAR LA PAGINA
    if (isset($_POST["cr"])) {

      $nombre = $_POST["Nom"]; // Recibe los parametros desde el cuadro de texto del form de abajo

      $apellido = $_POST["Ape"];

      $direccion = $_POST["Dir"];

      $sql = "INSERT INTO datos_usuarios (nombre,apellido,direccion) VALUES (:nom,:ape,:dir);";

//      base = conexion
      $resultado = $base->prepare($sql);

      $resultado->execute(array(":nom" => $nombre, ":ape" => $apellido, ":dir" => $direccion));

      header("Location:Video__73_CRUD_III_index.php");
    }
    ?>


    <h1>CRUD</h1>
    <div class="subtitulo"><br>Create Read Update Delete</div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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

        <?php foreach ($registros as $persona): ?>
          <tr>
            <td><?php echo $persona->Id ?></td>  
            <td><?php echo $persona->Nombre ?></td>  
            <td><?php echo $persona->Apellido ?></td>  
            <td><?php echo $persona->Direccion ?></td>  

            <td class="bot"><a href="Video__73_CRUD_III_borrar.php?Id = <?php echo $persona->Id ?>">
                <input type="button" name="del" id="del" value="Borrar">
              </a></td>
            <td class="bot">
              <a href="Video__73_CRUD_III_editar.php?Id=<?php echo $persona->Id ?>& nom=<?php echo $persona->Nombre ?>& ape=<?php echo $persona->Apellido ?>& dir=<?php echo $persona->Direccion ?>">
                <input type="button" name="up" id="up" value="Actualizar"></a></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td></td>
          <td><input type="text" name="Nom" size="10" class="centrado"></td>
          <td><input type="text" name="Ape" size="10" class="centrado"></td>
          <td><input type="text" name="Dir" size="10" class="centrado"></td>
          <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
  </body>
</html>






