<!--
    @Created on : 06-ene-2017, 13:18:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<h1>Listado de Paises</h1>
<table>
  <tr><th>City</th>
    <th>Country</th></tr>
  <?php 
//  Recoge los datos del controlador 
//  con el mismo nombre que $datos
  foreach ($datos as $dato) { ?>
    <tr>
      <td><?php echo $dato["ID"] ?></td>
      <td><?php echo $dato["Name"] ?></td>
    </tr>
  <?php } ?>
</table>

?>
