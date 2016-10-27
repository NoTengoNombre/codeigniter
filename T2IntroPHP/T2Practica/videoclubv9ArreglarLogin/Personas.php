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
<?php

class Personas {

//   Atributos : Almacenan los valores del formulario cuando estos se envian
  public $cod_persona;
  public $nombre;
  public $apellidos;
  public $pais;

  /**
   *  ♥ SELECT Basico
   *  Solo muestra valores
   */
  public function consulta_basica() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query("SELECT * FROM Personas WHERE cod_persona LIKE '%';"); // Todos los resultados
    $numeroRegistros = $resultado->num_rows;
    if ($resultado->num_rows > 0) {
      echo '<em><strong>Total de Numeros de Registros</strong></em> = ' . $numeroRegistros . '';
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

  /**
   * ♥ SELECT
   *  Funciona : Muestra todos los resultados 
   */
  public function consultar_personas() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if (isset($_REQUEST['cod_persona'])) {
      if (empty($_REQUEST['cod_persona'])) { // No esta vacia : FALSE
        echo "<em>No hay ningun <strong>cod_persona</strong> seleccionado.</em><br><br>";
      } else {
        $resultado = $mysqli->query("SELECT * FROM Personas WHERE cod_persona LIKE '" . $this->cod_persona . "';");
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
        } else {
          echo "<strong>- No hay registros <br> - Comprueba los datos introducidos<br></strong>";
        }
        while ($registro = $resultado->fetch_assoc()) {
          echo '<tr>'
          . '<td>' . $registro['cod_persona'] . '</td>'
          . '<td>' . $registro['nombre'] . '</td>'
          . '<td>' . $registro['apellidos'] . '</td>'
          . '<td>' . $registro['pais'] . '</td>'
          . '</tr>';
        }
      }
      $mysqli->close();
    }
  }

  /**
   * ♥ INSERT
   * Añadir peliculas
   */
  public function aniadir_personas() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba"); //crea conexion
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }
    if ((isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre'])) && (isset($_REQUEST['apellidos']) && isset($_REQUEST['pais']))) {
      if ((!empty($_REQUEST['cod_persona']) && !empty($_REQUEST['nombre'])) && (!empty($_REQUEST['apellidos']) && !empty($_REQUEST['pais']))) {
        $sql = "INSERT INTO Personas (cod_persona,nombre,apellidos,pais) VALUES ('" . $this->cod_persona . "','" . $this->nombre . "','" . $this->apellidos . "','" . $this->pais . "');";
        $mysqli->query($sql);
        echo "<em><strong>Nueva Inserccion del Registro</strong></em><br>";
        $resultado = $mysqli->query("SELECT * FROM Personas WHERE cod_persona LIKE '" . $this->cod_persona . "';");
        echo "<br><table border='1'>"
        . "<tr>"
        . "<th> cod_persona </th>"
        . "<th> nombre </th>"
        . "<th> apellidos </th>"
        . "<th> pais </th>"
        . "</tr>";
        while ($registro = $resultado->fetch_assoc()) {
          echo '<tr>'
          . '<td>' . $registro['cod_persona'] . '</td>'
          . '<td>' . $registro['nombre'] . '</td>'
          . '<td>' . $registro['apellidos'] . '</td>'
          . '<td>' . $registro['pais'] . '</td>'
          . '</tr>';
        }
      } else {
        echo "<em>Atencion : No se pueden añadir campos <strong>vacios o nulos</strong></em><br>";
        $mysqli->close();
      }
    }
  }

  /**
   * ♥ UPDATE : Funciona
   * ! Ver como mostrar antes y despues el SELECT
   * 
   */
  public function actualizar_personas() {
    $p = new Personas();
    $p->consulta_basica();
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("Error : No se establecido la conexion . " . $mysqli->connect_error);
    }

    if ((isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre'])) && (isset($_REQUEST['apellidos']) && isset($_REQUEST['pais']))) {
      if ((!empty($_REQUEST['cod_persona']) && !empty($_REQUEST['nombre'])) && (!empty($_REQUEST['apellidos']) && !empty($_REQUEST['pais']))) {
        $consulta = "UPDATE Personas SET nombre = '" . $this->nombre . "' , apellidos = '" . $this->apellidos . "' , pais = '" . $this->pais . "' WHERE cod_persona = '" . $this->cod_persona . "';";
        if (($mysqli->query($consulta) === TRUE) && ($mysqli->affected_rows > 0)) {
          echo "<br><strong>Consulta realizada : </strong> <br> Modo De Depuracion : <strong>" . $consulta . "</strong><br>";
          $this->consulta_basica();
          echo "<hr><h3>Valores Actualizados</h3>";
        } else {
          echo "Error en la actualizacion del registro: " . $mysqli->error;
        }
        $mysqli->close();
      } else {
        echo "<em>Atencion : No se pueden añadir campos <strong>vacios o nulos</strong></em><br>";
      }
    }
  }

  /**
   * ♥ DELETE
   * Funciona Perfectamente
   */
  public function borrar_personas() {
    $p = new Personas();
    $p->consulta_basica();
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die(" <br> Error : No se ha establecio la conexion . " . $mysqli->connect_error);
    }
    if (isset($_REQUEST['cod_persona'])) {
      if (!empty($_REQUEST['cod_persona'])) {
        $query = "DELETE FROM personas WHERE cod_persona ='" . $this->cod_persona . "';";
        if (($mysqli->query($query) === TRUE) && ($mysqli->affected_rows > 0)) {
          echo "Filas Afectadas : " . $mysqli->affected_rows;
          echo "<br><em>Registro Borrado</em><br> Modo de Depuracion <strong> : " . $query . " </strong><br>";
        } else {
          echo "<br> <strong> Error en el Borrado : </strong> " . $mysqli->errno . " coincidencias <br>";
        }
        $mysqli->close();
      } else {
        echo "<br>♦ Introduce el <strong>Cod_Persona</strong> en el campo correspondiente para borrar todos los datos<hr>";
      }
    }
  }

  // forma de crear el formulario con lenguaje PHP 
  function crear_formulario() {
    echo "<form name='form_peliculas' method='get' action='index.php'>";
    echo "Cod Persona " . "<input type='text' name='cod_pelicula'><br>";
    echo "Nombre " . "<input type='text' name='nombre'><br>";
    echo "Apellidos " . "<input type='text' name='apellidos'><br>";
    echo "Pais " . "<input type='text' name='pais'><br>";
    echo "<input type='hidden' name='accion' value='inserta' />";
    echo "<input type='submit' name='formfunc' value='enviar'><br>";
    echo "</from>";
  }

}
