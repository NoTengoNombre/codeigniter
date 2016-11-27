<!--
    @Created on : 26-nov-2016, 0:52:06
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
      h1{
        margin-bottom: 0px;
      }
      #encabezado {
        background-color: #ddf0a4;
      }
      #contenido{
        background-color: #EEEEEE;
        height: 600px;
      }
      #pie{
        background-color: #ddf0a4;
        color: #ff0000;
        height: 30px;
      }
    </style>
    <script>
    </script>
  </head>
  <body>
    <div id="encabezado">
      <h1>Ejercicio</h1>
      <form id="form_seleccion" method="get" action="<?php echo filter_input(INPUT_SERVER, "PHP_SELF"); ?>">
      </form>
    </div>

    <div id="contenido">
      <h2>Contenido</h2>
    </div>

    <div id="pie">

    </div>
  </body>
</html>
