<!--
 MostrarFormularioLogin 
del controlador me envia aqui para que logue al usuario.
-->
<h3>Login</h3>
<!-- Manda al index los valores de 'usuario' y 'passwd' 
Lleva implicito el 'do' y la 'accion' -> procesarFormularioLogin
para que se ejecute dentro del CONTROLADOR -->
<form action="index.php" method="get">
  Usuario:
  <input type="text" name="usuario" />
  <br/>
  Contraseña:
  <input type="text" name="passwd" />
  <br/>
  <input type="hidden" name="do" value="procesarFormularioLogin"/>
  <input type="submit"/>
</form>
<a href="index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>
