<?php

	include_once ("vista.php");
	
	class Controlador {

		public function control() {
	
		$vista = new Vista();

		if (!isset($_REQUEST["do"])){
			$accion = "principal";
		}else{
			$accion = $_REQUEST["do"];
		}

			switch($accion) {
	
			case "principal":
				$vista->show("principal");
			break;

			case "geolocation":
				$vista->show("geolocation");
			break;
		
			case "api":
				$vista->show("api");
			break;
			
			case "video":
				$vista->show("video");
			break;

			case "canvas":
				$vista->show("canvas");
			break;
			
			case "file":
				$vista->show("file");
			break;

			case "history":
				$vista->show("history");
			break;

			case "javascript":
				$vista->show("javascript");
			break;

			case "formularios":
				$vista->show("formularios");
			break;
			
			case "draganddrop":
				$vista->show("draganddrop");
			break;
			
			case "webstorage":
				$vista->show("webstorage");
			break;
			
			case "indexeddb":
				$vista->show("indexeddb");
			break;
			}

		}
}
