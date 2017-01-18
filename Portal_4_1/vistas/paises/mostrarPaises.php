
<body>
  <fieldset>
    <legend>Resultado Todos los Paises</legend>
    <div>
      <?php
      foreach ($data as $fila1) {
        foreach ($fila1 as $fila2) {
          echo $fila2[0] . ' - ' . $fila2[1] . ' - ' . $fila2[2];
          echo '<br>';
        }
      }
      ?>
      <br>
      <a href="index.php">Volver</a>   
    </div>
    <hr>
  </fieldset>
</body>
