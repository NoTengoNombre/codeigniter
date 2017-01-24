<?php
	class Vista {		
		public function show($vista) {
			$this->header();
			//$this->nav();
			//$this->aside();
			include("vistas/$vista.php");  
			$this->footer();
		}

		private function header() {
?>
		<!DOCTYPE html>
		<html lang="es">
		<head>
    
			    <title>Presentaci&oacute;n de HTML5</title>
			    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			    			
			    <link rel="stylesheet" href="estilo_principal.css" type="text/css" media="screen" />
			    <script src="js/script_indice.js"></script>
			    <script src="js/jquery-1.11.1.js"></script>
			    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
			    <script src="js/jquery.anchor.js"></script>
			    <script src="js/jquery.fancybox-1.2.6.pack.js"></script>
    
		</head>

		<body>

    		<header> 
    			
    			<div class="headercontainer">
    
    				<h1><img src="images/logo.png" width="128px" height="128px" style="margin-bottom:5px;"/></h1>
    		
    				<nav> <!-- HTML5 navigation tag -->
		    			<ul>
		    				<li><a href="index.php?do=principal">Organizaci&oacute;n</a></li>
		    				<li><a href="index.php?do=javascript">JavaScript</a></li>
		    				<li><a href="index.php?do=video">Video & Audio</a></li>
		    				<li><a href="index.php?do=formularios">Formularios</a></li>
		    				<li><a href='index.php?do=api'>API's</a></li>
		    			</ul>				
    				</nav>
    	
    			</div>
    
    	</header>

		<?php 
		}


		private function nav() {	?>
			<h1>Este será mi menú de navegación</h1>
		

		<?php 
		}

		private function footer() {
		?>	
			<footer>
				<div class="headercontainer" style="text-align:center;">
    				<h1>Presentaci&oacute;n realizada por:</h1>
    				<h2>Cristian Fern&aacute;ndez, Francisco M&aacute;rquez & José Carlos Fernández</h2>
    			</div>
    	</footer>	
    
    </section>
    
</body>

</html>

		<?php
		}
		
	













	}