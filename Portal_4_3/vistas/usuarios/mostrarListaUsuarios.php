<!-- Crear Formulario para registrar usuarios -->
<body>
  <h3>Ver Lista de Usuarios</h3>
  <?php
  var_dump($data);

  foreach ($data as $fila1) {
    foreach ($fila1 as $fila2) {
      echo $fila2[0] . ' - ' . $fila2[1] . ' - ' . $fila2[2] . ' - ' . $fila2[3] . ' - ' . $fila2[4] . ' - ' . $fila2[5] . ' - ' . $fila2[6] . ' - ' . $fila2[7] . ' - ' . $fila2[8] . ' - ' . $fila2[9] . ' - ';
      echo '<br>';
    }
  }
  ?>
  <a href="../../index.php">Volver</a>  
</body>
