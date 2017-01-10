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
  </head>
  <body>
    <h1>Introduce tus datos</h1>
    <form action="Video__59__Login_Sistema_de_Login_I_Comprueba_Datos.php" method="post"> 
      <table>
        <tr>
          <td class="izq">     
            Login:</td>
          <td class="titulo">
            <input type="text" name="login">
          </td></tr>
        <tr>
          <td class="izq">
            Password:</td>
          <td class="titulo">
            <input type="text" name="password">
          </td></tr>
        <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
    </form>
  </body>
</html>
