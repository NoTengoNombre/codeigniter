<!--
No tiene sentido id comentarios lo ponga el usuario 
Fecha de creacion se autoimplementa
Votaciones tampoco
Alerta tampoco
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Añadir Comentario </title>
  </head>
  <body>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Añadir Comentarios</legend>
        <input type="text" name="Texto" value="">
        <br>
        <input type="hidden" name="do" value="formulario_comentarios">
        <button name="enviar">Enviar</button>
      </fieldset>
    </form> 
  </body>
</html>



