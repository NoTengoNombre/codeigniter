		/*
		function mostrar(){
			if ($(".oculto").css("visibility","hidden")){
				$(".oculto").css("visibility","visible");
			}else{
				$(".oculto").css("visibility","hidden");
    		}
    	}
		*/

		function mostrar(){
			if ($(".oculto").css("visibility","hidden")){
				
				$(".oculto").css("visibility","visible");
			}

			
			var delay=8000;
    		setTimeout(function(){
    			$(".oculto").css("visibility","hidden");
    		},delay); 	
				
			

		}
