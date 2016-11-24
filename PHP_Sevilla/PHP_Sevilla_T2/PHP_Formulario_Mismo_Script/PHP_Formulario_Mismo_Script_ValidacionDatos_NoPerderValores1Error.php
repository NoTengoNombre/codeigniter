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
    if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
      $modulos = $_POST['modulos'];
      print "<p id='n1'>Nombre : </p><p id='n2'>" . $nombre . "</p><br>";
      foreach ($modulos as $modulo) {
        print "<p id='d1'>Modulo : </p><p id='d2'>" . $modulo . "</p><br>";
      }
    } else {
      ?>
      <form name="input" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nombre del alumno:
        <input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>">
        <?php
        if (isset($_POST['enviar']) && empty($_POST['nombre'])) {
          echo "<span style='color:red'> &lt; -- Debe de introducir un nombre!!</span>";
        }
        ?><br />
        <p>Modulo que curso:
          <?php
          if (isset($_POST['enviar']) && empty($_POST['modulos'])) {
            echo "<span style='color:red'> &lt;-- Debe escoger al menos uno!!</span>";
          }
          ?>
        </p>
        <input type="checkbox" name="modulos[]" value="DWES"
        <?php
        if (isset($_POST['modulos']) && in_array("DWES", $_POST['modulos'])) {
          echo 'checked="checked"';
        }
        ?>
               />
        Desarrollo web en entorno del servidor
        <br>
        <input type="checkbox" name="modulos[]" value="DWEC"
        <?php
        if (isset($_POST['modulos']) && in_array("DWEC", $_POST['modulos'])) {
          echo 'checked="checked"';
        }
        ?>
               />
        Desarrollo web en entorno cliente<br>
        <br>
        <input type="submit" value="Enviar" name="enviar" />
      </form>
      <?php
    }
    ?>
  </fieldset>
</body>
</html>
