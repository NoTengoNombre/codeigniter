<?php
 // Modelo Películas
 
 class Peliculas {

	public function getPeliculas() {
		$conex = new mysqli("localhost", "root", "", "test");
		$query = $conex->query("SELECT * FROM peliculas");
				
		while ($fila = $query->fetch_object()) {
			$lista_peliculas[] = $fila;
		}

		return $lista_peliculas;
	}
		
 
 }
?>