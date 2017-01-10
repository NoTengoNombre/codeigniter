<!--
    @Created on : 27-nov-2016, 20:16:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Peliculas</title>
  </head>
  <body>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Formulario Peliculas</legend>
        <br>
        <label>titulo</label>
        <input type="text" name="titulo" value="">
        <br>
        <label>duracion</label>
        <input type="text" name="duracion" value="">
        <br>
        <label>estreno</label>
        <input type="text" name="estreno" value="">
        <br>
        <label>sinopsis</label>
        <input type="text" name="sinopsis" value="">
        <br>
        <label>genero</label>
        <input type="text" name="genero" value="">
        <br>
        <label>tipo</label>
        <input type="text" name="tipo" value="">
        <br>
        <label>formato</label>
        <input type="text" name="formato" value="">
        <br>
        <label>enlace</label>
        <input type="text" name="enlace" value="">
        <br>
        <label>imagen</label>
        <input type="text" name="imagen" value="">
        <br>
        <input type="hidden" name="do" value="formAnadirPelicula">
        <button name="enviar">Enviar</button>
      </fieldset>
    </form> 
  </body>
</html>
