<!--
    @Created on : 30-dic-2016, 10:50:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

x-www-form-urlencoded - informacion tipo texto
multipart/form-data - para subir archivos
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>titulo</title>
    <style>
      table{
        margin:auto;
        width: 450px;
        border: 2px dotted #f00;
      }
      td{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <form action="Video__84_Subir_Imagen_Servidor_datosimagen.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>
            <label for="imagen">Imagen:</label>
          </td>
          <td>
            <input type="file" name="imagen" id="imagen" size="20">
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center">
            <input type="submit" value="Enviar Imagen">
          </td>
        </tr>
      </table>
    </form>   
  </body>
</html>
