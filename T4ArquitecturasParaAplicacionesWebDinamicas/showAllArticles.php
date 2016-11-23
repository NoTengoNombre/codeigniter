<!--
    @Created on : 23-nov-2016, 0:52:15
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
    <h1>Listado de Articulos</h1>
    <table>
      <tr><th>Fecha</th><th>Titulo</th></tr>
      <?php foreach ($articulos as $articulo): ?>
        <tr>
          <td><?php echo $articulo['fecha'] ?></td>
          <td><?php echo $articulo['titulo'] ?></td>
        </tr>
      <?php endforeach; ?>
      ?>
    </table>
  </body>
</html>
