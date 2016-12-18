<?php
    include_once("seguridad.php");

	class Login {
	
		
		public function checkLogin() {
			$usuario = $_REQUEST["usuario"];
			$p = $_REQUEST["passwd"];
			
			$conex = new mysqli("localhost", "root", "", "test");
			
			if ($conex->connect_error) 
				die("Error al conectar con la DB: ".$conex->connect_error);
			
			$sql = "SELECT user FROM usuarios WHERE user = '$usuario' AND pass = '$p'";
			$result = $conex->query($sql);

			if ($result->num_rows > 0) {
				$s = new Seguridad();
				$s->setNombreUsuario($usuario);
				$s->setTipoUsuario("admin");	// Le pongo este valor fijo, pero en vuestro sistema lo tendréis que sacar de la BD
				echo "<script>location.href='index.php?do=showmenuadmin'</script>";
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