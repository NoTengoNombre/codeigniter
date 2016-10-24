<!--
    @Created on : 20-oct-2016, 23:46:08
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class personas {

      public $cod_persona;
      public $nombre;
      public $apellidos;
      public $pais;
      public $cod_persona_nuevo;
      public $cod_persona_antiguo;

      /**
       * ♥ Añadir peliculas
       */
      public function aniadir_personas() {
        $mysqli = new mysqli("localhost", "root", "", "videoclub");
        if ($mysqli->connect_errno) {
          die("Error : No se establecido la conexion . " . $mysqli->connect_error);
        }
        $sql = "INSERT INTO personas (cod_persona,nombre,apellidos,pais) VALUES ('" . $this->cod_persona . "','" . $this->nombre . "','" . $this->apellidos . "','" . $this->pais . "' ) ; ";
        if (empty($_POST['cod_persona']) || !isset($_POST['cod_persona'])) {
          echo "<br> No se puede hacer en campos vacios  ";
        }
        $inserccion = $mysqli->query($sql);
        echo "<br>";
        if ($inserccion === true) {
          echo ("<i> Nueva Inserccion del Registro </i><br>");
        } else {
          echo ("<b> No se Realizo Inserccion del Registro</b><br>");
        }
        $mysqli->close();
      }

      /**
       * ♥ Funciona muestra todos los resultados automaticamente
       */
      public function consultar_personas() {
        $mysqli = new mysqli("localhost", "root", "", "videoclub");
        if ($mysqli->connect_errno) {
          die("Error : No se establecido la conexion . " . $mysqli->connect_error);
        } else {
          $resultado = $mysqli->query("SELECT * FROM personas");
          $numeroRegistros = $resultado->num_rows;
          if ($resultado->num_rows > 0) {
            echo '<br><i>Total de Numeros de Registros</i> = ' . $numeroRegistros . ' ';
            echo '<hr>';
            echo "<table border=1>"
            . "<tr>"
            . "<th> cod_persona </th>"
            . "<th> nombre </th>"
            . "<th> apellidos </th>"
            . "<th> pais </th>"
            . "</tr>";
          } else {
            echo "<b>No hay registros <br> Comprueba los datos introducidos<br></b>";
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
      }

      /**
       * ♥ Funciona
       */
      public function modificar_personas_completo() {
        $p = new personas();
        $p->consultar_personas();
        echo "<br>";
        echo "<hr>";
        $mysqli = new mysqli("localhost", "root", "", "videoclub");
        $registro = $mysqli->query("UPDATE personas SET nombre = '" . $this->nombre . "' , apellidos = '" . $this->apellidos . "' , pais = '" . $this->pais . "' WHERE cod_persona = '" . $this->cod_persona . "' ;");
        if ($registro == true) {
          echo "<b><br> Consulta realizada </b>";
          echo "<br> ";
        }
        $mysqli->close();
      }

      /**
       *  Funciona ♥
       */
      public function borrar_personas() {
        $db = new mysqli("localhost", "root", "", "videoclub");
        if ($db->connect_errno) {
          die(" <br> Error : No se establecio la conexion . " . $db->connect_error);
        }
        echo $this->cod_persona;
        if (isset($_POST['enviar2']) && !empty($this->cod_persona)) {
          if ($this->consultar_return_borrar() == $_POST['codb']) {
            $ver = $resultado = $db->query("DELETE FROM personas WHERE cod_persona = '$this->cod_persona'");
            if ($ver == true) {
              echo "<br> <b> Registro Borrado CON EXISTO </b>";
              $db->close();
            }
          } else {
            echo "<br> <b> Registro NO Borrado </b><br>";
            echo "<br> <b> Comprueba cod_persona es correcto </b><br>";
            $db->close();
          }
        } else {
          echo " <br> Sin Accceso al Registro <br> Introduce el <b>cod_persona</b> en el campo <b>Cod_Persona</b> ";
        }
      }

    }

    $per = new personas();

    if (isset($_POST['enviar'])) {
// Datos se envian formulario se almacenan atributos clase
      $per->cod_persona = $_POST['cod_persona'];
      $per->nombre = $_POST['nombre'];
      $per->apellidos = $_POST['apellidos'];
      $per->pais = $_POST['pais'];
      $per->modificar_personas_completo();
    }
    ?>
  <html>
    <head>
      <meta charset="UTF-8">
      <title></title>
    </head>
    <body>
      <form name="form1" method="post" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
        <br>
        Cod_persona : <input type="text" name="cod_persona" value="">
        <br>
        Nombre :  <input type="text" name="nombre" value="">
        <br>
        Apellidos :  <input type="text" name="apellidos" value="">
        <br>
        Pais :  <input type="text" name="pais" value="">
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
      </form> 
    </body>
  </html>
  <br>
  <hr>
