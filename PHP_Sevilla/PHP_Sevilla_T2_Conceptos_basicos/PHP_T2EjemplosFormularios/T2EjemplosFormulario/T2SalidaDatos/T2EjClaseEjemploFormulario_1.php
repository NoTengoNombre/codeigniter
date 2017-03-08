Ejemplo formulario sencillo PHP
<!DOCTYPE html>
<html>
  <head>
    <title>Mi primer script PHP</title>
  </head>
  <body>
    <h1>Formulario datos personales</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      Nombre: <input type="text" name="nombre_u" value="<?php
      if (isset($_REQUEST['nombre_u']) && $_REQUEST['nombre_u'] != "") {
       echo $_REQUEST['nombre_u'];
      }
      ?>" /><br />
      Email: <input type="email" name="email" value="<?php
      if (isset($_REQUEST['email']) && $_REQUEST['email'] != "") {
       echo $_REQUEST['email'];
      }
      ?>"/><br />
      Nacionalidad:
      <select name="nacionalidad">
        <option value="Espana">Espa&ntilde;a</option>
        <option value="Francia">Francia</option>
        <option value="Italia">Italia</option>
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

