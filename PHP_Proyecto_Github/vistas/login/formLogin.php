<!--
 MostrarFormularioLogin 
del controlador me envia aqui para que logue al usuario.
-->
<h3>Login</h3>
<!-- Manda al index los valores de 'usuario' y 'passwd' 
Lleva implicito el 'do' y la 'accion' -> procesarFormularioLogin
para que se ejecute dentro del CONTROLADOR -->

<form action="index.php" method="get">
  <label>
    Nombre Usuario
  </label>
  <input type="text" name="usuario" />
  <br>
  <label>
    Fecha Nacimiento 
  </label>
  <input type="text" name="fechaN" />
  <br>
  <label>
    Ciudad
  </label>
  <input type="text" name="ciudad" />
  <br>
  <label>
    Genero
  </label>
  <input type="text" name="genero" />
  <br>
  <label>
    Imagen Usuario
  </label>
  <input type="text" name="imagen_usuario" />
  <br>
  <label>
    Email
  </label>
  <input type="text" name="email" />
  <br>
  <label>
    Biografia
  </label>
  <input type="text" name="biografia" />
  <br>
  <label>
    Contraseña:
  </label>
  <input type="text" name="passwd" />
  <br/>
  <input type="hidden" name="do" value="procesarFormularioLogin"/>
  <input type="submit"/>
</form>
<a href="index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>
<hr>
<label>
  Tipo Usuario
</label>
<input type="hidden" name="tipo_usuario" />
<br>