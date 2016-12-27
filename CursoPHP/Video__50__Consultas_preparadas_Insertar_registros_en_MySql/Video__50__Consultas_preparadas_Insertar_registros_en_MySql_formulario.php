<!--
    @Created on : 24-dic-2016, 18:03:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
Insertar articulos en todos los campos
Saber el tipo de campo "varchar"

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>

      input{
        height: auto;
        width: auto;
      }

      table{
        padding: 10px;
      }

      body{
        text-align: center;
        height: auto;
        width: auto;
        border: 1px solid #f00;
        background-color: #FC9;
      }

      #boton{
        padding-top: 25px;
      }
    </style>
  </head>
  <body>
    <h1>Alta de Articulos Nuevos</h1>
    <form action="Video__50__Consultas_preparadas_Insertar_registros_en_MySql_Recibe.php" method="get">
      <table>
        <tr>
          <td><label>Codigo Articulos:</label></td>
          <td><input type="text" name="c_art"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Seccion:</label></td>
          <td><input type="text" name="secc"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Nombre Articulo:</label></td>
          <td><input type="text" name="n_art"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Precio:</label></td>
          <td><input type="text" name="pre"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Fecha:</label></td>
          <td><input type="text" name="fec"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Importado:</label></td>
          <td><input type="text" name="imp"></td></tr>
      </table>
      <table>
        <tr>
          <td><label>Pais de Origen:</label></td>
          <td><input type="text" name="p_ori"></td>
        </tr>
        <tr>
          <td colspan="2" align="center" id="boton">
            <input type="submit" name="enviando" value="!Dale!">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
