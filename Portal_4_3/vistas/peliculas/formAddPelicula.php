<!-- Directorio Vista - Formulario add Peliculas -->
<?php
    if (isset($data["mensaje"])) {
      echo "<p style='color:red'>".$data["mensaje"]."</p>";
    }
    $listaPaises = $data["listaPaises"];
?>
<!--Me muestra el formulario de peliculas por si quiero seguir añadiendo peliculas-->
    <form method="get" action="index.php">
      <fieldset>
        <legend>Formulario Peliculas</legend>
        <br>
        <label>titulo</label>
        <input type="text" name="titulo" value="">
        <br>
        <label>duracion</label>
        <input type="text" name="duracion" value="">
        <br>
        <label>estreno</label>
        <input type="text" name="estreno" value="">
        <br>
        <label>sinopsis</label>
        <input type="text" name="sinopsis" value="">
        <br>
        <label>genero</label>
        <input type="text" name="genero" value="">
        <br>
        <label>tipo</label>
        <input type="text" name="tipo" value="">
        <br>
        <label>formato</label>
        <input type="text" name="formato" value="">
        <br>
        <label>enlace</label>
        <input type="text" name="enlace" value="">
        <br>
        <label>imagen</label>
        <input type="text" name="imagen" value="">
        <br>
        <label>País</label>
        
        <select name="pais">
<?php
        foreach ($listaPaises as $pais) {
          echo "<option value = '".$pais["id_paises"]."'>".$pais["pais"]."</option>";
        }
?>
        </select>
        
        <br>
        <input type="hidden" name="do" value="addPelicula">
        <button name="enviar">Enviar</button>
      </fieldset>
    </form> 
  
