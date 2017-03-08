<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Plantilla para Ejercicios Tema 3</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="encabezado">
      <h1>Ejercicio: </h1>
      <form method="post" id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <span>Producto : </span>
        <select name="producto">
          <?php
          if (isset($_POST['producto']))
            $id = $_POST['producto'];
//          Rellenar el descargable con lo datos de todos los productos
          $dwes = new mysqli("localhost", "root", "", "dwes");
          $error = $dwes->connect_errno;
          if ($error == null) {
            $sql = "SELECT cod , nombre_corto FROM producto";
            $resultado = $dwes->query($sql);
            if ($resultado) {
              $row = $resultado->fetch_assoc();
              while ($row != null) {
                echo "<option value='${row['cod']}";
//            Si se recibio un codigo de producto lo seleccionamos
//            en el desplegable usando selected='true'
                if (isset($id) && $id == $row['cod']) {
                  echo "selected ='true'";
                }
                echo ">${row['nombre_corto']}</option>";
                $row = $resultado->fetch_assoc();
              }
              $resultado->close();
            }
          } else {
            $mensaje = $dwes->connect_error;
          }
          ?>
        </select>
        <input type="submit" value="Mostrar stock" name="enviar" />
      </form>
      <div id="contenido">
        <h2>Stock del producto en las tiendas :</h2>
        <?php
//      Si se recibio el producto no se produjo ningun error
//      mostramos el stock de ese producto en las distintas tiendas
        if ($error = null && isset($id)) {
          $sql = "SELECT tienda.nombre , stock.unidades FROM tienda INNER JOIN sotck ON tienda.cod=stock.tienda WHERE stock.producto=$id'";
          $resultado = $dwes->query($sql);
          if ($resultado) {
            $row = $resultado->fetch_assoc();
            while ($row != null) {
              echo "<p>Tienda ${row['nombre']}: ${row['unidades']} unidades.</p>";
              $row = $resultado->fetch_assoc();
            }
            $resultado->close();
          }
        }
        ?>
      </div>
      <div id="pie">
        <?php
//      Si se produjo algun error se muestra en el pie
        if ($error != null) {
          echo "<p>Se ha producido un error ! $mensaje</p>";
        } else {
          $dwes->close();
          unset($dwes);
        }
        ?>
      </div>
  </body>
</html>

