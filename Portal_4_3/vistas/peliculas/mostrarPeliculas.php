
<body>
  <fieldset>
    <legend>Resultado Peliculas</legend>
<?php
    $listaPeliculas = $data["listaPeliculas"];
    foreach($listaPeliculas as $peli) {
      echo $peli["titulo"]."<br/>";
    }
?>
    <div>
      <a href="index.php">Volver</a>   
    </div>
    <hr>
  </fieldset>
</body>
