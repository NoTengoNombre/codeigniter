
<body>
  <fieldset>
    <legend>Datos película</legend>
<?php
    $peli = $data["pelicula"];
    echo $peli["titulo"]."<br/>";
    echo $peli["pais"]."<br>";
?>
    <div>
      <a href="index.php?do=mostrarMenu">Volver</a>   
    </div>
    <hr>
  </fieldset>
</body>
