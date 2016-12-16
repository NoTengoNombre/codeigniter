<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Crear Formulario para registrar usuarios
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Formulario Usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <style></style>
    <script></script>
  </head>
  <body>
    <h3>Alta de usuario</h3>
    <form method="get" action="../../Controlador.php">
      <label>  
        Nombre Usuario :
      </label>
      <input type="text" name="nombre_usuario" value=""/>
      <br>
      <label>
        Fecha Nacimiento :
      </label>
      <input type="text" name="fecha_nacimiento" value="" />
      <br>
      <label>
        Ciudad : 
      </label>
      <input type="text" name="ciudad" value="" />
      <br>
      <label>
        Genero : 
      </label>
      <input type="text" name="genero" value="" />
      <br>
      <label>
        Imagen Usuario :
      </label>
      <input type="text" name="imagen_usuario" value="" />
      <br>
      <label>
        Email :
      </label>
      <input type="text" name="email" value="" />
      <br>
      <label>
        Biografia : 
      </label>
      <input type="text" name="biografia" value="" />
      <br>
      <label>
        Contraseña :
      </label>
      <input type="text" name="passwd" value=""/>
      <br>
      <label>
        Tipo Usuario :
      </label>
      <input type="text" name="do" value="1" readonly>
      <input type="hidden" name="do" value="procesarFormularioAltaUsuario"/>
      <br>
      <input type="submit" value="enviar">
    </form>
  </body>
</html>
