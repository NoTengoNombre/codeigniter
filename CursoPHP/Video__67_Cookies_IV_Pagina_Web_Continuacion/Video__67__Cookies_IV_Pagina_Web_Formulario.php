<!--
    @Created on : 27-dic-2016, 22:45:49
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Documento sin titulo</title>
    <style>
      h1 , h2 {
        text-align: center;
      }
      table{
        width: 25%;
        background-color: #ffc;
        border : 2px solid #f00;
        margin: auto;
        .izq{
          text-align: right;
        }

        .der{
          text-align: left;
        }

        .td{
          text-align: center;
          padding: 1px;
        }
      }
    </style>
  </head>
  <body>
    <h1>Introduce datos</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
      <table>
        <tr> <!-- fila -->
          <td class="izq">Login:</td> <!-- celda -->
          <td class="der"> <!-- celda -->
            <input type="text" name="login"> <!-- celda -->
          </td>
        </tr>
        <tr>
          <td class="izq">Password:</td><!-- celda -->
          <td class="der"><!-- celda -->
            <input type="password" name="password"><!-- celda -->
          </td>
        </tr>
        <tr>
          <td class="izq">Recordar:</td>
          <td>
            <input type="checkbox" name="recordar" id="recordar">
            <label for="recordar"></label>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
