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
					<input type="submit"/>
				</form>
				</body>
			</html>;
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
			if (($usuario == "alfredo") && ($p == "1234")) {
				echo "Bienvenido a la web, $usuario<br/>";
			}
			else {
				echo "Nombre de usuario o contraseña incorrecto<br/>";
				echo "<a href='..'>Volver</a>";
			}
			echo "</body></html>";
		
		}
	
	
	}
?>