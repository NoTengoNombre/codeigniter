<!--
    @Created on : 20-oct-2016, 23:46:08
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
                  Después escribe un programa en PHP para mantener la tabla Personas. 

                  El programa debe permitir:

                  *Añadir nuevos registros, introduciendo todos los campos de la tabla.

                  - Eliminar registros existentes, introduciendo el código de la película.

                  Modificar los registros existentes, mostrando antes la información que haya en la BD.

                  También debe ser posible hacer un mantenimiento de la tabla Películas 
                  (Añadir, eliminar y modificar), pero ten cuidado, porque en este caso 
                  hay que enlazarla con la tabla Actúan para especificar los actores que trabajan en la película.

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form name="form1" method="get" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
      <label><h3>Formulario</h3></label>
      Seleccionar cod_persona  : <input type="text" name="cod_persona" value="">
      <br>
      Nombre :  <input type="text" name="nombre" value="">
      <br>
      Apellidos :  <input type="text" name="apellidos" value="">
      <br>
      Pais :  <input type="text" name="pais" value="">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form> 
  </body>
</html>
<br>
<hr>

<?php

class Personas {

  public $cod_persona;
  public $nombre;
  public $apellidos;
  public $pais;

  public function consulta_basica() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query("SELECT * FROM Personas WHERE cod_persona LIKE '%';"); // Todos los resultados
    $numeroRegistros = $resultado->num_rows;
    if ($resultado->num_rows > 0) {
      echo '<br><em>Total de Numeros de Registros</em> = ' . $numeroRegistros . '';
      echo '<hr>';
      echo "<br><table border='1'>"
      . "<tr>"
      . "<th> cod_persona </th>"
      . "<th> nombre </th>"
      . "<th> apellidos </th>"
      . "<th> pais </th>"
      . "</tr>";
    }
    while ($registro = $resultado->fetch_assoc()) {
      echo '<tr>'
      . '<td>' . $registro['cod_persona'] . '</td>'
      . '<td>' . $registro['nombre'] . '</td>'
      . '<td>' . $registro['apellidos'] . '</td>'
      . '<td>' . $registro['pais'] . '</td>'
      . '</tr>';
    }
    $mysqli->close();
  }

  public function modificar_personas() {
    $p = new Personas();
    $p->consulta_basica();
    $db = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($db->connect_errno) {
      die("Error : No se establecido la conexion . " . $db->connect_error);
    }
    if (isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellidos']) && isset($_REQUEST['pais'])) {
      $consulta = "UPDATE personas SET nombre='" . $this->nombre . "' , apellidos='" . $this->apellidos . "' , pais='" . $this->pais . "' WHERE cod_persona='" . $this->cod_persona . "';";
      $resultado = $db->query($consulta);
//      if ($resultado != 0) {
      if ($resultado === TRUE) {
        echo "<br><strong>Consulta realizada :</strong> .  $resultado .<br>";
      } else {
        echo "Error UPDATE " . $db->error;
      }
    }
    echo "Error en el isset ";
  }

}

// Objeto para añadir los datos del formulario a los atributos de clase 
$per = new Personas();

if (isset($_REQUEST['enviar'])) {
// Datos se envian formulario se almacenan atributos clase
  $per->cod_persona = $_REQUEST['cod_persona'];
  $per->nombre = $_REQUEST['nombre'];
  $per->apellidos = $_REQUEST['apellidos'];
  $per->pais = $_REQUEST['pais'];

  $per->modificar_personas();
}

    