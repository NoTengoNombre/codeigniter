<?php
echo "<h3>Prueba de acceso a base de datos</h3>";
if (!isset($_REQUEST["id"])) { // Es la primera vez que entramos a la aplicación.
  // Vamos a mostrar el formulario para que el usuario lo rellene.
  echo "Insertar nueva película<br/>";
  ?>

  <form action="accesobd_insert.php">
    ID:<input type="text" name="id"/><br/>
    Titulo:<input type="text" name="titulo"/><br/>
    Duracion: <input type="text" name="duracion"/><br/>
    Pais: <input type="text" name="pais"/><br/>
    <input type="submit"/>
  </form>
  <?php
} else { // Ya tenemos los datos del formulario disponibles.
  // Vamos a insertarlos en la BD.
  //Nos conectamos con MySQL
  $db = new mysqli("localhost", "root", "", "test");
  // Comprobamos que la conexión se ha realizado
  if ($db->connect_error) {
    die("Error en la conexion : " . $db->connect_error);
  }

  // Recuperamos las variables del formulario
  $id = $_REQUEST["id"];
  $titulo = $_REQUEST["titulo"];
  $duracion = $_REQUEST["duracion"];
  $pais = $_REQUEST["pais"];

  //Ejecutamos la consulta SQL
  $sql = "INSERT INTO peliculas(id, titulo, duracion, pais) VALUES ('$id', '$titulo', '$duracion', '$pais')";
  $result = $db->query($sql);
  //echo "Estoy enviando a la BD esto: " . $sql;

  if ($result != 0) {
    echo "Datos insertados con éxito<br/>";
    echo "<a href='accesobd_insert.php'>Volver</a>";
  } else {
    echo "Ha ocurrido un error insertando los datos<br/>";
    //echo $db->error."<br/>";
    echo "<a href='accesobd_insert.php'>Volver</a>";
  }


  $db->close(); // Cierra la conexión con el servidor
} // else
?>
	