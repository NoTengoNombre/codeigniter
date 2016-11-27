<!--
    @Created on : 24-nov-2016, 19:29:33
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: #999999;
      }

      p{
        width: 140px;
        background-color: #99ff99;
      }

      p#n1{
        width: 140px;
        background-color: #99ff99;
      }

      p#n2{
        width: 100px;
        background-color: #428bca;
      }
      p#d1{
        width: 140px;
        background-color: #99ff99;
      }
      p#d2{
        width: 100px;
        background-color: #428bca;
      }
    </style>
  </head>
  <body>
    <?php
    if (isset($_POST['enviar'])) {
      $nombre = $_POST['nombre'];
      $modulos = $_POST['modulos'];
      print "<p id='n1'>Nombre : </p><p id='n2'>" . $nombre . "</p><br> ";
      foreach ($modulos as $modulo) {
        print "<p id='d1'>Modulo : </p><p id='d2'>" . $modulo . "</p><br>";
        echo "<a href=''>Regresar</a>";
      }
    } else {
      ?>
      <form name="input" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
          <legend>Formulario</legend>
          <label>Nombre del alumno :</label>
          <br>
          <input type="text" name="nombre" value="">
          <br>
          <label>Ciclo que cursa :</label>
          <br>DWES
          <input type="checkbox" name="modulos[]" value="DWES">
          <br>DWEC
          <input type="checkbox" name="modulos[]" value="DWEC">
          <br>
          <input type="submit" value="Enviar" name="enviar">
          </form>
          <?php
        }
        ?>
      </fieldset>
  </body>
</html>
