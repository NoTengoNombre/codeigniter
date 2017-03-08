<!--
    @Created on : 26-nov-2016, 0:52:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Ejercicio Tema 3 : Conjunto de Resultado en MySQLI</title>
    <title></title>
    <style>
      h1{
        margin-bottom: 0;
      }
      #encabezado {
        background-color:#ddf0a4;
      }
      #contenido{
        background-color: #EEEEEE;
        height: 600px;
      }
      #pie{
        background-color:#ddf0a4;
        color:#ff0000;
        height:30px;
      }
    </style>
  </head>
  <body>
    <div id="encabezado">
      <h1>Ejercicio: Conjunto de resultados en MySQLI</h1>
      <form id="form_seleccion" action="PHP_T3_Pantilla.php" method="post">
        <select name="producto">
          <?php
          if (isset($_POST['ID']))
            $id = $_POST['ID'];
//          Rellenar el descargable con lo datos de todos los productos
          $dwes = new mysqli("localhost", "root", "", "world");
          $error = $dwes->connect_errno;
          if ($error == null) {
            $sql = "SELECT * FROM city";
            $resultado = $dwes->query($sql);
            if ($resultado) {
              $row = $resultado->fetch_assoc();
              while ($row != null) {
                echo "<option value='${row['ID']}";
//            Si se recibio un codigo de producto lo seleccionamos
//            en el desplegable usando selected='true'
                if (isset($id) && $id == $row['ID']) {
                  echo "selected ='true'";
                }
                echo ">${row['Name']}</option>";
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
    </div>
    <div id="contenido">
      <h2>Stock del producto en las tiendas :</h2>
      <?php
//      Si se recibio el producto no se produjo ningun error
//      mostramos el stock de ese producto en las distintas tiendas
      if ($error = null && isset($id)) {
        $sql = "SELECT * FROM city WHERE ID = " . $id;
        $resultado = $dwes->query($sql);
        if ($resultado) {
          $row = $resultado->fetch_assoc();
          while ($row != null) {
            echo "<p>Ciudad ${row['ID']} " . " : " . " ${row['Name']} unidades.</p>";
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
        echo "<p>Se ha producido un error! " . $mensaje . "</p>";
      } else {
        $dwes->close();
        unset($dwes);
      }
      ?>
    </div>
  </body>
</html>
