<!--
    @Created on : 26-dic-2016, 1:29:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : NAVEGADOR EMPIEZA A LEER DE ARRIBA A ABAJO 
Login.php -> formulario : se valida con la bd 
                  Si esta el usuario se redirige a una pagina pag1.php
                  Si no lo esta redirige a una pagina Prohibido.php
              Podemos hacer que este en un bucle repitiendo la entrada el login
- Usuario maria :  4qki5165fmrpc4185n3nk1kqq1
          asd : 4qki5165fmrpc4185n3nk1kqq1

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <style>
    h1 , h2{
      text-align: center;
    }
    table{
      width: 25%;
      background: #FFC;
      border: 2px dotted #F00;
      margin: auto;
    }

    .izq{
      text-align: right;
    }

    .titulo{
      text-align: left;
    }

    td{
      text-align: center;
      padding: 10px;
    }
  </style>
  <body>
    <h1>Introduce tus datos</h1>
    <!--Para que cargue la misma pagina y muestre las imagenes necesitamos la variable SuperGlobal $_SERVER 
Esta variable la metemos dentro de action donde queremos redirigir
    $_SERVER['PHP_SELF'] -> variable superglobal
    Cuando pulsamos boton de enviar hara una de la misma pagina en la que nos encontramos , escaneara la pagina
    y reenviará el codigo , luego comprobara si los valores son validos -->
    <!--<form action="Video__62__Login_Sistema_de_Login_III_Comprueba_Datos.php" method="post">--> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post"> 
      <table>
        <tr>
          <td class="izq">     
            Login:</td>
          <td class="titulo">
            <input type="text" name="login">  
          </td>
        </tr>
        <tr>
          <td class="izq">
            Password:</td>
          <td class="titulo">
            <input type="text" name="password">
          </td></tr>
        <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
      </table>
    </form>
  </body>
</html>
