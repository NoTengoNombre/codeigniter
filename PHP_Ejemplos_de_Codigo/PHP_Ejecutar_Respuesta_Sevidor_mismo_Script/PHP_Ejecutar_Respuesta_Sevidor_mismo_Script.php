<!--
    @Created on : 24-nov-2016, 12:21:00
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
        background-color: black;
      }
      hr#hr1{
        border-width: 1px;
        border-color: #ff0000;
      }
      p{
        color: #ffffff;
      }
      br{
        color: #99ff99;
      }
    </style>
  </head>
  <body>
    <h1 style="background-color: #ffffff">Formulario envio </h1>
    <hr>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p> Name : </p>
      <input type="text" name="nombre">
      <p> Enviar : </p>
      <input type="submit">
    </form>
    <?php
    echo '<hr id="hr1">';
    echo '<p><br>Respuesta del Servidor</p>';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_REQUEST['nombre'];
      if (empty($name)) {
        echo "<br><p>Name is empty</p>";
      } else {
        echo "<br><p>Name is : " . $name . " </p>";
      }
    }
    ?>
  </body>
</html>
