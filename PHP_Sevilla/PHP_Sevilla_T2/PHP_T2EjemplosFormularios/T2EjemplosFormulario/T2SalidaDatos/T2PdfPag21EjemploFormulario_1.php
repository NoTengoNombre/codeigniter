<!DOCTYPE html>
<html>
  <head>
    <title>Mi primer script PHP</title>
  <p>Ejemplo formulario sencillo PHP</p>
</head>
<body>
  <h1>Formulario datos personales</h1>

  <!-- etiqueta form para crear el formulario con todos los elementos -->
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- etiqueta input para indicar como quiero introducir los datos -->
    Nombre: <input type="text" name="nombre_u" value="<?php
    if (isset($_REQUEST['nombre_u']) && $_REQUEST['nombre_u'] != "") {
     echo $_REQUEST['nombre_u'];
    }
    ?>"/><br />

    <!-- etiqueta input para indicar como quiero introducir los datos -->
    Email: <input type="email" name="email" value="<?php
    if (isset($_REQUEST['email']) && $_REQUEST['email'] != "") {
     echo $_REQUEST['email'];
    }
    ?>"/><br />

    <!-- etiqueta input para indicar como quiero introducir los datos -->
    Nacionalidad:
    <select name="nacionalidad">
      <option value="espana">Espa&ntilde;a</option>
      <option value="francia">Francia</option>
      <option value="italia">Italia</option>
    </select><br />
    <input type="submit" name="envio" value="Envia los datos" />      
  </form>

  <?php
  if (isset($_REQUEST['envio'])) {
   if ($_REQUEST['nombre_u'] != "" && $_REQUEST['email'] != '') {
    echo "El nombre es: " . $_REQUEST['nombre_u'];
    echo "<br />El mail es: " . $_REQUEST['email'];
    echo "<br />Nacionalidad: " . $_REQUEST['nacionalidad'];
   }
  }
  ?>


</body>
</html>

