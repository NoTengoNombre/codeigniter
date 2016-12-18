<?php
	include ("login.php");
	
	$login = new Login();	// Instanciamos un objeto de la clase Login

	if (!isset($_REQUEST["usuario"])) {
		$login->showForm();
	}
	else {
		$login->checkLogin();
	}
	
?>	