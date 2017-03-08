<!--
    @Created on : 29-dic-2016, 19:04:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      @import "../hoja.css";
    </style>
  </head>
  <body>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
      <table width = "50%" border = "0" align = "center">
        <tr> <!--Repetir los registros la cantidad de registro que haya en la bd y en la consulta -->
          <td class = "primera_fila">Id</td>
          <td class = "primera_fila">Nombre</td>
          <td class = "primera_fila">Apellido</td>
          <td class = "primera_fila">Direccion</td>
          <td class = "sin">&nbsp;
          </td>
          <td class = "sin">&nbsp;
          </td>
          <td class = "sin">&nbsp;
          </td>
        </tr>

        <?php foreach ($matrizPersonas as $persona):
          ?>
          <tr>
            <td><?php echo $persona["Id"] ?></td>  
            <td><?php echo $persona["Nombre"] ?></td>  
            <td><?php echo $persona["Apellido"] ?></td>  
            <td><?php echo $persona["Direccion"] ?></td>  

            <td class="bot"><a href="Video__77_CRUD_IIII_borrar.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
            <td class='bot'><a href="Video__77_CRUD_IIII_editar.php?Id=<?php echo $persona->Id ?> & nom=<?php echo $persona->Nombre ?> & ape=<?php echo $persona->Apellido ?> & dir=<?php echo $persona->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
          </tr>


        <?php endforeach;
        ?>
        <tr>
          <td></td>
          <td><input type='text' name='Nom' size='10' class='centrado'></td>
          <td><input type='text' name='Ape' size='10' class='centrado'></td>
          <td><input type='text' name='Dir' size='10' class='centrado'></td>
          <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
        <tr><td>
            <!--------------------------PAGINACION -------------------------->
            <?php
            for ($i = 1; $i <= $total_paginas; $i++) {
              echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
            }
            ?>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
