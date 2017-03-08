<!--
    @Created on : 26-dic-2016, 19:18:33
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
  </head>
  <body>
    <?php
//Si Comentamos esta linea no elimina la session porque al ser nueva , tenemos que indicar que session queremos cerrar , si quitamos esta instruccion , el navegador no sabe a cual session queremos eliminar
    session_start();

    session_destroy();

    header("Location:Video__61__Login_Sistema_de_Login_III.php");
    ?>
  </body>
</html>
