<!--
    @Created on : 26-dic-2016, 1:29:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Login.php -> formulario : se valida con la bd 
                  Si esta el usuario se redirige a una pagina pag1.php
                  Si no lo esta redirige a una pagina Prohibido.php
              Podemos hacer que este en un bucle repitiendo la entrada el login
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <style>
    h1{
      text-align: center;
    }
    table{
      width: 25%;
      background: #FFC;
      border: 2px dotted #F00;
      margin: auto;
    }

    .izq{
      text-align: center;
    }

    .titulo{
      text-align: center;
    }

    td{
      text-align: center;
      padding: 10px;
    }
    body{
      background: #000;
      color: #f00;
    }
  </style>
  <body>
    <table>
      <h1 class="titulo">Bienvenido</h1>
      <p class="izq">Estas en la zona de registros</p>
    </table>
  </body>
</html>
