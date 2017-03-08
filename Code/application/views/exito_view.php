<html>
  <head>
    <title>Exito</title>
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?>
    <style type="text/css" media="screen">
      div.exito{
        background-color:#C2FFAF;
        border:1px solid #2A7F0F;
        padding:5px;
        margin-bottom:15px;
        width:400px;
      }
    </style>
  </head>
  <body>
    <div class="exito">
      El formulario se ha enviado correctamente
    </div>
    <!--1º parametro es la url que va a llamar 2º parametro texto va a mostrar como link-->
    <?php echo anchor('formulario', 'Volver al formulario'); ?> 
  </body>
</html>