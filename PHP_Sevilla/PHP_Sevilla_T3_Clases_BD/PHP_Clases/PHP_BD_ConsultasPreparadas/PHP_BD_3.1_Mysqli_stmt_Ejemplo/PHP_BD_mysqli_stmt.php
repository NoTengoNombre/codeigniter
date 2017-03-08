<!--
    @Created on : 27-nov-2016, 14:27:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>EJemplo : Consultas preparadas con MYSQLI</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
//    Peticion formulario
    if (isset($_POST['producto'])) {
      $producto = $_POST['producto'];
    }
///*Probar Errores */ @ $dwes = new mysqli('localhost', 'root', '', 'dwes');
    $dwes = new mysqli("localhost", "root", "", "dwes");
    $error = $dwes->connect_errno;
    if ($error == null) {
      // si no hay error devuelve 'null'
//        Comprobamos si tenemos que actualizar los valores
      if (isset($_POST['actualizar'])) {
//          Preparamos la consulta
        $tienda = $_POST['tienda'];
        $unidades = $_POST['unidades'];
        $insertar = $dwes->stmt_init();
        $sql = "UPDATE stock SET unidades=? WHERE tienda=? AND producto='$producto'";
        $insertar->prepare($sql);
//      La ejecutamos dentro de un bucle , tantas veces como tiendas haya
        for ($i = 0; $i < count($tienda); $i++) {
          $insertar->bind_param('ii', $unidades[$i], $tienda[$i]);
          $insertar->execute();
        }
        $mensaje = "Se han actualizado los datos.";
        $insertar->close();
      }
    } else {
//      Si no se ha podido establecer la conexion , generamos un mensaje de error
      $mensaje = $dwes->connect_error;
    }
    ?>
    <div id="encabezado">
      <h1>Ejercicio 1 :  Consultas preparadas con MYSQLI</h1>
      <form id="form_seleccion" action="" method="post">
        <span>Producto : </span>
        <select name="producto">
          <?php
//          Rellenamos el desplegable con los datos de todos los productos
          if ($error == null) {
            $sql = "SELECT cod, nombre_corto FROM producto";
            $resultado = $dwes->query($sql);
            if ($resultado) {
              $row = $resultado->fetch_assoc();
              while ($row != null) {
                echo "<option value='${$row['cod']}'";
//                    Si se recibio un codigo de producto lo seleccionamos
//                    en el desplegamos usando selected='true'
                if (isset($producto) && $producto == $row['cod']) {
                  echo " selected='true'";
                }
                echo "<option>" . $row['nombre_corto'] . "</option>";
                $row = $resultado->fetch_assoc();
              }
              $resultado->close();
            }
          }
          ?>
        </select>
        <input type="submit" value="Mostrar stock" name="enviar" />
      </form>
    </div>
    <div id="contenido">
      <h2>Stock del producto en las tiendas : </h2>
      <?php
//      Si se recibio un codigo de producto y no se produjo ningun error
//      mostramos el stock de ese producto en las distintas tiendas
      if ($error == null && isset($producto)) {
//        AHORA  necesitamos tambien el codigo de tienda
        $sql = "SELECT tienda.cod , tienda.nombre , stock.unidades
                FROM tienda INNER JOIN stock ON tienda.cod=stock.tienda
                WHERE stock.producto = $producto";
        $resultado = $dwes->query($sql);
        if ($resultado) {
//              Creamos un formulario con los valores obtenidos
          echo '<form id="form_actualizar" action="." method="post">';
          $row = $resultado->fetch_assoc();
          while ($row != null) {
//        Metemos ocultos el codigo de producto y los de las tiendas
            echo "<input type='hidden' name='producto' value='$producto'>";
            echo "<input type='hidden' name='tienda[]' value='" . $row['cod'] . "'>";
            echo "<p> tienda ${row['nombre']}: ";
//      El numero de unidades ahora va en un cuadro de texto
            echo "<input type='text' name='unidades[]' size='4' ";
            echo "value='" . $row['unidades'] . "'> unidades</p>";
            $row = $resultado->fetch_assoc();
          }
          $resultado->close();
          echo "<input type='submit' value='Actualizar' name='actualizar' />";
          echo "</form>";
        }
      }
      ?>
    </div>
    <div ip="pie">
      <?php
//      Si se produjoo alguno error se muestra en el pie
      if ($error != null) {
        echo "<p>Se ha producido un error! " . $mensaje . "</p>";
      } else {
        echo "Error ";
        $dwes->close();
        unset($dwes);
      }
      ?>
    </div>
  </body>
</html>