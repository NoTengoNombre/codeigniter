<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Crear formulario - Añadir Peliculas
                  Lo envia al index para realizar la inserccion
                  tiene que estar en la parte de administrador -->
<!--<form method="get" action="index.php">-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <style></style>
    <script></script>
  </head>
  <body>
    <form method="get" action="controlador.php">
      <fieldset>
        <legend>Peliculas</legend>
        <!--Aqui iria el formulario para añadir una pelicula-->
        <br>
        <label>Titulo</label>
        <input type="text" maxlength="30" minlength="4" name="titulo" value="">
        <br>
        <label>Duracion</label>
        <input type="number" maxlength="3" minlength="3" ame="duracion" value="">
        <br>
        <label>Estreno</label>
        <input type="number" maxlength="4" minlength="4" name="estreno" value="">
        <br>
        <label>Sinopsis</label>
        <input type="text" name="sinopsis" maxlength="50" minlength="4" value="">
        <br>
        <label>Genero</label>
        <input type="text" name="genero" maxlength="20" minlength="4" value="">
        <br>
        <label>Tipo</label>
        <input type="number" maxlength="5" minlength="1" name="tipo" value="">
        <br>
        <label>Formato</label>
        <input type="text" maxlength="20" minlength="1" name="formato" value="">
        <br>
        <label>Enlace</label>
        <input type="text" maxlength="250" minlength="4" name="enlace" value="">
        <br><label>Imagen</label>
        <input type="text" maxlength="250" minlength="4" name="imagen" value="">
        <input type="hidden" name="do" value="addPelicula"/>
        <br>
        <label>Enviar</label>
        <input type="submit" value="enviar"/>
      </fieldset>
    </form>
  </body>
</html>
