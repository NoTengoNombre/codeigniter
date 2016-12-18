<h1>Esta es la vista de listaPeliculas.</h1>

Título de la vista: <?php echo $data["titulo"];?>
Nombre del usuario: <?php echo $data["nombreUsr"]; ?>

<table border = "1">
<tr><td>id</td><td>Titulo</td><td>Duracion</td><td>Pais</td></tr>
<?php
	$i = 0;
	foreach($data["lista_peliculas"] as $pelicula) {
		echo "<tr>";
		echo "<td>".$pelicula->id."</td>";
		echo "<td>".$pelicula->titulo."</td>";
		echo "<td>".$pelicula->duracion."</td>";
		echo "<td>".$pelicula->pais."</td>";
		echo "</tr>";
	}
?>
</table>