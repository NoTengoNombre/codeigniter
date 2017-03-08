
<body>
  <fieldset>
    <legend>Resultado Todos los Paises</legend>
    <div>
      <?php
      $listaPaises = $data["resultado"];
      foreach ($listaPaises as $pais) {
          echo $pais["id_paises"] . ' - ' . $pais["pais"] . ' - ' . $pais["ciudad"];
          echo '<br>';
      }
      ?>
      <br>
      <a href="index.php?do=mostrarMenu">Volver</a>   
    </div>
    <hr>
  </fieldset>
</body>
