<!--
    @Created on : 21-dic-2016, 20:59:35
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
      h1{
        text-align: center;
      }

      table{
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
      }

      .no_validado{
        font-size: 18px;
        color: #F00;
        font-weight: bold;
      }

      .validado{
        font-size: 18px;
        color: #0CE;
        font-weight: bold;
      }
    </style>
  </head>
  <h1>Usando Condicionales</h1>
  <body>
    <form action="Video__15__Operadores_Condicionales3_Recibir_Datos.php" method="post" name="datos_usuario" id="datos_usuario">
      <table width="15%" align="center">
        <tr>
          <td>Nombre</td>
          <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
          <td>Edad:</td>
          <td><label for="edad_usuario"></label>
            <input type="text" name="edad_usuario" id="edad_usuario"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="enviando" id="enviando" value="Enviar">
          </td>
          </td>
        </tr>
      </table>
    </form>
    <?php
    ?>
  </body>
</html>
