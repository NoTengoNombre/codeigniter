<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
  </head>
  <body>
    <h3>Login</h3>
    <form action="../../index.php" method="get">
      <fieldset>
        <legend>
          Usuario:
        </legend>
        <input type="text" name="usuario" />
        <br>
        <br>
        <legend>
          Contraseña:
        </legend>
        <input type="text" name="passwd" />
        <br>
        <input type="hidden" name="do" value="procesarFormularioLogin"/>
        <br>
        <input type="submit"/>
      </fieldset>
    </form>
    <!-- Enviar al index 'do' con la accion 'mostrarFormularioAltaUsuario' -->
    <!--<a href="index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>-->
    <div>
      <br>
      <label>
        <a href="../../index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>
      </label>
    </div>
  </body>
</html>


<!--<h3>Login</h3>
<form action="../../index.php" method="get">
  <fieldset>
    <legend>
      Usuario:
    </legend>
    <input type="text" name="usuario" />
    <br>
    <legend>
      Contraseña:
    </legend>
    <input type="text" name="passwd" />
    <br>
    <input type="hidden" name="do" value="procesarFormularioLogin"/>
    <input type="submit"/>
  </fieldset>
</form>-->