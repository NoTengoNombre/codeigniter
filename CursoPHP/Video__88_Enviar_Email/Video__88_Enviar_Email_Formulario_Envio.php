<!--
    @Created on : 30-dic-2016, 16:39:07
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
  </head>
  <body>
    <form name="formulario_contacto" method="post" action="Video__88_Enviar_Email_Formulario_Enviar_Email.php">
      <table width="500px">
        <tr>
          <td>
            <label for="nombre"> Nombre: </label>
          </td>
          <td>
            <input type="text" name="nombre" id="nombre" maxlength="50" size="25">
          </td>
        </tr>
        <tr>
          <td>
            <label for="apellidos"> Apellidos: </label>
          </td>
          <td>
            <input type="text" name="apellidos" id="apellidos" maxlength="50" size="25">
          </td>
        </tr>
        <tr>
          <td>
            <label for="email"> Direccion email </label>
          </td>
          <td>
            <input type="text" name="email" id="email" maxlength="50" size="25">
            <!--<input type="email" name="email" id="email" maxlength="50" size="25">-->
          </td>
        </tr>
        <tr>
          <td>
            <label for="tfno"> Numero Telefono </label>
          </td>
          <td><input type="text" name="tfno" id="tfno" maxlength="50" size="25">
            <!--<input type="tel" name="tfno" id="tfno" maxlength="50" size="25">-->
          </td>
        </tr>
        <tr>
          <td>
            <label for="asunto"> Asunto </label>
          </td>
          <td>
            <input type="text" name="asunto" id="asunto" maxlength="50" size="25">
          </td>
        </tr>
        <tr>       
          <td>Comentarios:</td>
          <td>
            <label for="comments"></label>
            <textarea name="comentarios" id="comments" maxlength="500" cols="30" rows="5"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center">
            <input type="submit" value="Enviar">
          </td>
        </tr>
      </table>
    </form> 
  </body>
</html>
