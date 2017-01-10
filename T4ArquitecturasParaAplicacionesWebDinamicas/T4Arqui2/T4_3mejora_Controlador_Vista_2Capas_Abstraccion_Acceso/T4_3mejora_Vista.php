<!--
    @Created on : 07-ene-2017, 12:58:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vista 2 mejora</title>
  </head>
  <body>
    <h1>Listado de Paises</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
      <?php foreach ($datos as $dato): ?>
        <tr>
          <td><?php echo $dato['ID'] ?></td>
          <td><?php echo $dato['Name'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>

