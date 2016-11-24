<!--
    @Created on : 24-nov-2016, 11:10:20
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://www.w3resource.com/php/super-variables/$_FILES.php
    @version    : 
    @TODO       : 
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <style>
      form{
        background-color: #99ff99;
      }
    </style>
  </head>
  <body>
    <!--Metodo 'post' permite envio de foto  -->
    <form action="PHP_Recibir_Archivos.php" method="post" enctype="multipart/form-data">
      <label for="file">Filename:</label>
      <input type="file" name="file" id="file">
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>