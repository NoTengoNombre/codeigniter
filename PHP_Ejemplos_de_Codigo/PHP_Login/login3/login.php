<?php
	class Login {
	
		public function showForm() {
?>
			<html>
				<head><title>Login</title></head>
				<body>
				<h3>Login sencillo con PHP</h3>
				<form action="index.php" method="GET">
					Usuario:
					<input type="text" name="usuario" />
					<br/>
					Contraseña:
					<input type="password" name="passwd" />
					<br/>
					<input type="hidden" name="do" value="checklogin"/>
					<input type="submit"/>
				</form>
				</body>
			</html>
<?php
		}
		
		public function checkLogin() {
			echo "<html>
					<head>
					<title>Login sencillo con PHP</title>
					</head>
				   <body>";
			$usuario = $_REQUEST["usuario"];
			$p = $_REQUEST["passwd"];
			
			$conex = new mysqli("localhost", "root", "", "test");
			
			if ($conex->connect_error) 
				die("Error al conectar con la DB: ".$conex->connect_error);
			
			$result = $conex->query("SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$p'");

			if ($result->num_rows > 0) {
				echo "Bienvenido a la web, $usuario<br/>";
				echo "Menú<br/>";
				echo "<a href='index.php?do=anadirpelicula'>Añadir película</a><br/>";
				echo "<a href='index.php?do=buscarpelicula'>Buscar película</a><br/>";
				echo "<a href=''>Borrar película</a><br/>";
				echo "<a href=''>Modificar película</a><br/>";
			}
			else {
				echo "Nombre de usuario o contraseña incorrecto<br/>";
				echo "<a href='..'>Volver</a>";
			}
			$result->free();
			$conex->close();
			echo "</body></html>";

		}
	
	
	}
?>