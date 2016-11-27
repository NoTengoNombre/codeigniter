<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Crear Formulario para registrar usuarios
-->

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
  <!--  
  <label>
  Tipo Usuario :
  </label>
  <input type="text" name="" value="" />-->
  <!-- Aqui van el resto de campos del formulario de alta de usuarios <br/> -->
  <input type="hidden" name="do" value="procesarFormularioAltaUsuario"/>
  <input type="submit"/>
</form>
