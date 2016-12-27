<!--
    @Created on : 23-dic-2016, 19:17:02
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
      table{
        align-content: center;
        width: auto;
        height: auto;
        border: 1px solid #f00;
        padding: 10px;
      }
    </style>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_errno($conexion)) {
      echo "Error en la base de datos";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la base de datos");

    mysqli_set_charset($conexion, "utf8");

//    Inserta datos 
    $consulta = "INSERT INTO PRODUCTOS (A,B,C) VALUES ('AR_x1','DEPORTES','RAQUETA BADMINTON')";

    $resultado = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);
    ?>
  </head>
  <body>
    <form name="form1" method="get" action="Video__42__Insertando_registros_en_BBDD_Insert3_Recibir_Datos.php">
      <table>
        <tr>
          <td>Codigo Articulo</td>
          <td><label for="c_art"></label>
            <input type="text" name="c_art" id="c_art"></td>
        </tr>
        <tr>
          <td>Seccion</td>
          <td><label for="seccion"></label>
            <input type="text" name="seccion" id="seccion"></td>
        </tr>
        <tr>
          <td>Nombre Articulo</td>
          <td><label for="n_art"></label>
            <input type="text" name="n_art" id="n_art"></td>
        </tr>
        <tr>
          <td>Precio</td>
          <td><label for="precio"></label>
            <input type="text" name="precio" id="precio"></td>
        </tr>
        <tr>
          <td>Fecha</td>
          <td><label for="fecha"></label>
            <input type="text" name="fecha" id="fecha"></td>
        </tr>
        <tr>
          <td>Importado</td>
          <td><label for="importado"></label>
            <input type="text" name="importado" id="importado "></td>
        </tr>
        <tr>
          <td>Pais de Origen</td>
          <td><label for="p_orig"></label>
            <input type="text" name="p_orig" id="p_orig"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
          <td align="center"><input type="submit" name="Borrar" id="Borrar" value="Borrar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
