<!--
    @Created on : 06-ene-2017, 13:18:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : MODELO
-->


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
?>
