<!--
    @Created on : 27-nov-2016, 20:16:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : No tiene sentido id comentarios lo ponga el usuario 
                  Fecha de creacion se autoimplementa
                  Votaciones tampoco
                  Alerta tampoco
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>Añadir Comentarios</legend>
      <form method="get" action="Controlador.php">
        <input type="text" name="Texto" value="">
        <br>
        <input type="hidden" name="do" value="formulario_comentarios">
        <button name="enviar">Enviar</button>
    </fieldset>
  </form> 
  <?php
  ?>
</body>
</html>



