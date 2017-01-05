<!--
    @Created on : 30-dic-2016, 18:12:02
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <style>

      h2{
        text-align:center;
      }

      table{
        width:50%;
        margin:auto;
        background-color:#FF9;
        border:solid 2px #FF9900;
        padding:5px;
      }

      td{
        padding:5px 0;
      }


    </style>
  </head>

  <body>
    <h2>Nueva entrada</h2>
    <form action="../controlador/Transacciones.php" method="post" enctype="multipart/form-data" name="form1">
      <table>
        <tr>
          <td>Título: 
            <label for="campo_titulo"></label>
          </td>
          <td>
            <input type="text" name="campo_titulo" id="campo_titulo">
          </td>
        </tr>
        <tr>
          <td>Comentarios: 
            <label for="area_comentarios"></label>
          </td>
          <td>
            <textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            <!-- 2097152 - son 2MB pasado a bytes -->
            <input type="hidden" name="MAX_TAM" value="2097152">
          </td>
        </tr>
        <tr> 
          <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td>
        </tr>
        <tr>
          <td colspan="2" align="left">
            <input type="file" name="imagen" id="imagen"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">  
            <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <a href="Mostrar_Blog.php">Página de visualización del blog</a>
          </td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>

  </body>
</html>












