<?php
// ¿Está definida la variable "accion"?
if (!isset($_REQUEST["accion"])) {    // Aún no está definida: entramos por primera vez
 ?>
 <!-- Modo 1: usando enlaces -->
 <h1>Menú películas</h1>
 <ul>
    <li><a href="peliculas.php?accion=anadir">Añadir peli</a></li>
    <li><a href="peliculas.php?accion=modificar">Modificar peli</a></li>
    <li><a href="peliculas.php?accion=borrar">Borrar peli</a></li>
 </ul>

 <!-- Modo 2: usando botones con evento onclick -->
 <h1>Menú películas</h1>
 <input type="button" value="Añadir peli" onClick="location.href = 'peliculas.php?accion=anadir'"/>
 <input type="button" value="Modificar peli" onClick="location.href = 'peliculas.php?accion=modificar'"/>
 <input type="button" value="Borrar peli" onClick="location.href = 'peliculas.php?accion=borrar'"/>

 <!-- Modo 3: usando formularios con campos ocultos -->
 <h1>Menú películas</h1>
 <form action="peliculas.php">
    <input type="hidden" name="accion" value="anadir"/>
    <input type="sumbit" value="Añadir peli"/>
 </form>
 <form action="peliculas.php">
    <input type="hidden" name="accion" value="modificar"/>
    <input type="sumbit" value="Modificar peli"/>
 </form>
 <form action="peliculas.php">
    <input type="hidden" name="accion" value="borrar"/>
    <input type="sumbit" value="Borrar peli"/>
 </form>

 <?php
} else {
 // "accion" ya está definida: vamos a realizar la acción especificada en la variable
 if ($_REQUEST["accion"] == "anadir") {
// <<aquí se añade una pelicula en la bbdd>>
 }
 if ($_REQUEST["accion"] == "modificar") {
//<<aquí se modifica una pelicula en la bbdd>>
 }
 if ($_REQUEST["accion"] == "borrar") {
//<<aquí se borra una pelicula en la bbdd>>
 }
}
?>