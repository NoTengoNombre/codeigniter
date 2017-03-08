<!--
    @Created on : 23-dic-2016, 23:15:00
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : DELETE FROM TABLA WHERE CAMPO = CRITERIO
INSERT INTO productos (A,B,C,D,E,F,G) VALUES ("abc","abc","abc","abc","2010-01-01","abc","abc");F
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      h1{
        text-align: center;
        color: #00F;
        border-bottom: dotted #00f;
        width: 50%;
        margin: auto;
      }
      table{
        border: 1px solid #f00;
        padding: 20px 50px;
        margin-top: 50px;
        align-content: center;
      }

      body{
        background-color: #ffee88;
      }
    </style>  
  </head>
  <body>
    <h1>Eliminacion de Articulos</h1>
    <form method="get" action="Video__44__Eliminando_registros_en_BBDD_Mysql_Recibir.php" name="form1" id="form1">
      <table>
        <tr>
          <td>Codigo Articulo</td>
          <td><input type="text" name="c_art"></td>
        </tr>
        <tr>
<!--          <td>Seccion</td>
          <td><input type="text" name="seccion" value=""></td>
        </tr>
        <tr>
          <td>Numero Articulo</td>
          <td><input type="text" name="n_art" value=""></td>
        </tr>
        <tr>
          <td>Precio Articulo</td>
          <td><input type="text" name="precio" value=""></td>
        </tr>
        <tr>
          <td>Fecha Articulo</td>
          <td><input type="text" name="fecha" value=""></td> 
        </tr>
        <tr>
          <td>Importado Articulo</td>
          <td><input type="text" name="importado" value=""></td>
        </tr>
        <tr>
          <td>Pais Articulo</td>
          <td><input type="text" name="p_org" value=""></td>
        </tr>-->
        <tr>
          <td><input type="submit" name="enviar"></td>
          <td><input type="reset" name="borrar" value="borrar"></td>
        </tr>
      </table>
    </form>
    <?php
    ?>
  </body>
</html>
