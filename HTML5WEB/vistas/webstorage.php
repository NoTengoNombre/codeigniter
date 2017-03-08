<section id="contentcontainer"> <!-- Estructura principal de las vistas -->

    
    <section id="intro">
		<article>
			<h2 class="intro">API Web Storage</h2>
			<p>La Web fue primero pensada como una forma de mostrar información. El procesamiento de información comenzó luego, primero con aplicaciones del lado del servidor y más tarde, de forma bastante ineficiente, a través de pequeños códigos y complementos (plug-ins) ejecutados en el ordenador del usuario.</p>               
	   </article>
	</section>
	<section id="intro">
		<article>		
			<h2 class="intro">Dos sistemas de almacenamiento</h2>
			<p>La API Web Storage es básicamente una mejora de las Cookies. Esta API nos permite almacenar datos en el disco duro del usuario y utilizarlos luego del mismo modo que lo haría una aplicación de escritorio. El proceso de almacenamiento provisto por esta API puede ser utilizado en dos situaciones particulares: cuando la información tiene que estar disponible solo durante la sesión en uso, y cuando tiene que ser preservada todo el tiempo que el usuario desee.</p>
			<p>Para hacer estos métodos más claros y comprensibles para los desarrolladores, la API fue dividida en dos partes llamadas <span class="resaltado">sessionStorage</span> y <span class="resaltado">localStorage</span>.</p>
			
			<p><strong class="resaltado">sessionStorage</strong>&nbsp; Este es un mecanismo de almacenamiento que conservará los datos disponible solo durante la duración de la sesión de una página. De hecho, a diferencia de sesiones reales, la información almacenada a través de este mecanismo es solo accesible desde una única ventana o pestaña y es preservada hasta que la ventana es cerrada. La especificación aún nombra “sesiones” debido a que la información es preservada incluso cuando la ventana es actualizada o una nueva página desde el mismo sitio web es cargada.</p>
			<p><strong class="resaltado">localStorage</strong>&nbsp; Este mecanismo trabaja de forma similar a un sistema de almacenamiento para aplicaciones de escritorio. Los datos son grabados de forma permanente y se encuentran siempre disponibles para la aplicación que los creó.</p>
			
			<br></br>
			<p>Ambos mecanismos trabajan a través de la misma interface, compartiendo los mismos métodos y propiedades. Y ambos son dependientes del origen, lo que quiere decir que la información está disponible solo a través del sitio web o la aplicación que los creó. Cada sitio web tendrá designado su propio espacio de almacenamiento que durará hasta que la ventana es cerrada o será permanente, de acuerdo al mecanismo utilizado.</p>
			<p>La API claramente diferencia datos temporales de permanentes, facilitando la construcción de pequeñas aplicaciones que necesitan preservar solo unas cadenas de texto como referencia temporaria (por ejemplo, carros de compra) o aplicaciones más grandes y complejas que necesitan almacenar documentos completos por todo el tiempo que sea necesario.</p>
			<br></br>
			<p><strong class="resaltado">IMPORTANTE:</strong> Muchos navegadores solo trabajan de forma adecuada con esta API cuando la fuente es un servidor real. Para probar los siguientes códigos, le recomendamos que primero suba los archivos a su servidor.</p>
	   </article>
	</section>
	
	<section id="intro">
	
		<article>
			<h2 class="intro">La sessionStorage</h2>
			
			<p>Esta parte de la API, <span class="resaltado">sessionStorage</span>, es como un reemplazo para las Cookies de sesión. Las Cookies, así como <span class="resaltado">sessionStorage</span>, mantienen los datos disponibles durante un período específico de tiempo, pero mientras las Cookies de sesión usan el navegador como referencia, <span class="resaltado">sessionStorage</span> usa solo una simple ventana o pestaña.</p>
			<p>Esto significa que las Cookies creadas para una sesión estarán disponibles mientras el navegador continúe abierto, mientras que los datos creados con <span class="resaltado">sessionStorage</span> estarán solo disponibles mientras la ventana que los creó no es cerrada.</p>
		</article>
		
		<article></br>
			<h3 class="intro">Implementación de un sistema de almacenamiento de datos</h3>
			
			<p>Debido a que ambos sistemas, <span class="resaltado">sessionStorage</span> y <span class="resaltado">localStorage</span>, trabajan con la misma interface, vamos a necesitar solo un documento HTML y un simple formulario para probar los códigos y experimentar con esta API:</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		 &lt;head&gt;
			&lt;title&gt;Web Storage API&lt;/title&gt;
			&lt;link rel="stylesheet" href="storage.css"&gt;
			&lt;script src="storage.js"&gt;&lt;/script&gt;
		 &lt;/head&gt;
		 &lt;body&gt;
			&lt;section id="cajaformulario"&gt;
				 &lt;form name="formulario"&gt;
				   &lt;p&gt;Clave:&lt;br&gt;&lt;input type="text" name="clave" id="clave"&gt;&lt;/p&gt;
				   &lt;p&gt;Valor:&lt;br&gt;&lt;textarea name="text" id="texto"&gt;&lt;/textarea&gt;&lt;/p&gt;
				   &lt;p&gt;&lt;input type="button" name="grabar" id="grabar" 
				     value="Grabar"&gt;&lt;/p&gt;
				 &lt;/form&gt;
			&lt;/section&gt;
			&lt;section id="cajadatos"&gt;
				No hay información disponible
			&lt;/section&gt;
		 &lt;/body&gt;
	&lt;/html&gt;

			</pre>
		</article>
		<article></br>
			<h3 class="intro">Creando datos</h3>
			
			<p>Ambos, <span class="resaltado">sessionStorage</span> y <span class="resaltado">localStorage</span>, almacenan datos como ítems. Los ítems están formados por un par clave/valor, y cada valor será convertido en una cadena de texto antes de ser almacenado. Piense en ítems como si fueran variables, con un nombre y un valor, que pueden ser creadas, modificadas o eliminadas. Existen dos nuevos métodos específicos de esta API incluidos para crear y leer un valor en el espacio de almacenamiento:</p>
			
			<p><strong class="resaltado">setItem(clave, valor)</strong>&nbsp; Este es el método que tenemos que llamar para crear un ítem. El ítem será creado con una clave y un valor de acuerdo a los atributos especificados. Si ya existe un ítem con la misma clave, será actualizado al nuevo valor, por lo que este método puede utilizarse también para modificar datos previos.</p>
			<p><strong class="resaltado">getItem(clave)</strong>&nbsp; Para obtener el valor de un ítem, debemos llamar a este método especificando la clave del ítem que queremos leer. La clave en este caso es la misma que declaramos cuando creamos al ítem con setItem().</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
	}
	
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		sessionStorage.setItem(clave,valor);
		mostrar(clave);
	}
	
	function mostrar(clave){
		var cajadatos=document.getElementById('cajadatos');
		var valor=sessionStorage.getItem(clave);
		cajadatos.innerHTML='&lt;div&gt;'+clave+' - '+valor+'&lt;/div&gt;';
	}
	
	window.addEventListener('load', iniciar, false);

			</pre>
			
			<p>Además de estos métodos, la API también ofrece una sintaxis abreviada para crear y leer ítems desde el espacio de almacenamiento. Podemos usar la clave del ítem como una propiedad y acceder a su valor de esta manera. Este método usa en realidad dos tipos de sintaxis diferentes de acuerdo al tipo de información que estamos usando para crear el ítem. Podemos encerrar una variable representando la clave entre corchetes, por ejemplo, <span class="resaltado">sessionStorage[clave]=valor</span> o podemos usar directamente el nombre de la propiedad, por ejemplo, <span class="resaltado">sessionStorage.miitem=valor</span>.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
	}
	
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		sessionStorage[clave]=valor;
		mostrar(clave);
	}
	
	function mostrar(clave){
		var cajadatos=document.getElementById('cajadatos');
		var valor=sessionStorage[clave];
		cajadatos.innerHTML='&lt;div&gt;'+clave+' - '+valor+'&lt;/div&gt;';
	}
	
	window.addEventListener('load', iniciar, false);

			
			</pre>
			
		</article>
		<article></br>
			<h3 class="intro">Leyendo datos</h3>
			
			<p>El anterior ejemplo solo lee el último ítem grabado. Vamos a mejorar este código aprovechando más métodos y propiedades provistos por la API con el propósito de manipular ítems:</p>
			
			<p><strong class="resaltado">length</strong>&nbsp; Esta propiedad retorna el número de ítems guardados por esta aplicación en el espacio de almacenamiento. Trabaja exactamente como la propiedad length usada normalmente en Javascript para procesar arrays, y es útil para lecturas secuenciales.</p>
			<p><strong class="resaltado">key(índice)</strong>&nbsp; Los ítems son almacenados secuencialmente, enumerados con un índice automático que comienzo por 0. Con este método podemos leer un ítem específico o crear un bucle para obtener toda la información almacenada.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
		mostrar();
	}
	
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		sessionStorage.setItem(clave,valor);
		mostrar();
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
	}
	
	function mostrar(){
		var cajadatos=document.getElementById('cajadatos');
		cajadatos.innerHTML='';
		
		for(var f=0;f&lt;sessionStorage.length;f++){
			var clave=sessionStorage.key(f);
			var valor=sessionStorage.getItem(clave);
			cajadatos.innerHTML+='&lt;div&gt;'+clave+' - '+valor+'&lt;/div&gt;';
		}
	}
	
	window.addEventListener('load', iniciar, false);

			
			</pre>
		</article>
		<article></br>
			<h3 class="intro">Eliminando datos</h3>
				
			<p>Los ítems pueden ser creados, leídos y, por supuesto, eliminados. Es hora de ver cómo eliminar un ítem. La API ofrece dos métodos para este propósito:</p>
			<p><strong class="resaltado">removeItem(clave)</strong>&nbsp; Este método eliminará un ítem individual. La clave para identificar el ítem es la misma declarada cuando el ítem fue creado con el método <span class="resaltado">setItem()</span>.</p>
			<p><strong class="resaltado">clear()</strong>&nbsp; Este método vaciará el espacio de almacenamiento. Todos los ítems serán eliminados.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
		mostrar();
	}
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		sessionStorage.setItem(clave,valor);
		mostrar();
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
	}
	function mostrar(){
		var cajadatos=document.getElementById('cajadatos');
		cajadatos.innerHTML='&lt;div&gt;&lt;button onclick="eliminarTodo()"&gt;
			Eliminar Todo&lt;/button&gt;&lt;/div&gt;';
		
		for(var f=0;f&lt;sessionStorage.length;f++){
			var clave=sessionStorage.key(f);
			var valor=sessionStorage.getItem(clave);
			cajadatos.innerHTML+='&lt;div&gt;'+clave+' - '+valor+'&lt;br&gt;
				&lt;button	onclick="eliminar(\''+clave+'\')"&gt;Eliminar&lt;/button&gt;&lt;/div&gt;';
		}
	}
	function eliminar(clave){
		if(confirm('Esta Seguro?')){
			sessionStorage.removeItem(clave);
			mostrar();
		}
	}
	function eliminarTodo(){
		if(confirm('Esta Seguro?')){
			sessionStorage.clear();
			mostrar();
		}
	}
	window.addEventListener('load', iniciar, false);
			
			</pre>
			
		</article>
	
	</section>
	<section id="intro">
	
		<article>
			<h2 class="intro">La localStorage</h2>
			
			<p>Disponer de un sistema confiable para almacenar datos durante la sesión de una ventana puede ser extremadamente útil en algunas circunstancias, pero cuando intentamos simular poderosas aplicaciones de escritorio en la web, un sistema de almacenamiento temporal no es suficiente.</p>
			
			<p>Para cubrir este aspecto, Storage API ofrece un segundo sistema que reservará un espacio de almacenamiento para cada aplicación (cada origen) y mantendrá la información disponible permanentemente. Con <span class="resaltado">localStorage</span>, finalmente podemos grabar largas cantidades de datos y dejar que el usuario decida si la información es útil y debe ser conservada o no.</p>
			
			<p>El sistema usa la misma interface que <span class="resaltado">sessionStorage</span>, debido a esto cada método y propiedad estudiado hasta el momento en este capítulo son también disponibles para <span class="resaltado">localStorage</span>. Solo la substitución del prefijo <span class="resaltado">session</span> por local es requerida para preparar los códigos.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
		mostrar();
	}
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		localStorage.setItem(clave,valor);
		mostrar();
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
	}
	function mostrar(){
		var cajadatos=document.getElementById('cajadatos');
		cajadatos.innerHTML='';
		
		for(var f=0;f&lt;localStorage.length;f++){
			var clave=localStorage.key(f);
			var valor=localStorage.getItem(clave);
			cajadatos.innerHTML+='&lt;div&gt;'+clave+' - '+valor+'&lt;/div&gt;';
		}
	}
	window.addEventListener('load', iniciar, false);
	
			</pre>
			
		</article>
		
		<article></br>
			<h3 class="intro">Evento storage</h3>
			
			<p>Debido a que <span class="resaltado">localStorage</span> hace que la información esté disponible en cada ventana donde la aplicación fue cargada, surgen al menos dos problemas: debemos resolver cómo estas ventanas se comunicarán entre sí y cómo haremos para mantener la información actualizada en cada una de ellas. En respuesta a ambos problemas, la especificación incluye el evento <span class="resaltado">storage</span>.</p>
			
			<p><strong class="resaltado">storage</strong>&nbsp; Este evento será disparado por la ventana cada vez que un cambio ocurra en el espacio de almacenamiento. Puede ser usado para informar a cada ventana abierta con la misma aplicación que los datos han cambiado en el espacio de almacenamiento y que se debe hacer algo al respecto.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', nuevoitem, false);
		window.addEventListener("storage", mostrar, false);
		mostrar();
	}
	function nuevoitem(){
		var clave=document.getElementById('clave').value;
		var valor=document.getElementById('texto').value;
		localStorage.setItem(clave,valor);
		mostrar();
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
	}
	function mostrar(){
		var cajadatos=document.getElementById('cajadatos');
		cajadatos.innerHTML='';
		
		for(var f=0;f&lt;localStorage.length;f++){
			var clave=localStorage.key(f);
			var valor=localStorage.getItem(clave);
			cajadatos.innerHTML+='&lt;div&gt;'+clave+' - '+valor+'&lt;/div&gt;';
		}
	}
	window.addEventListener('load', iniciar, false);

			
			</pre>
	
		</article>
		<article></br>
			<h3 class="intro">Espacio de almacenamiento</h3>
			
			<p>La información almacenada por <span class="resaltado">localStorage</span> será permanente a menos que el usuario decida que ya no la necesita. Esto significa que el espacio físico en el disco duro ocupado por esta información probablemente crecerá cada vez que la aplicación sea usada. Hasta este momento, la especificación de HTML5 recomienda a los fabricantes de navegadores que reserven un mínimo de 5 megabytes para cada origen (cada sitio web o aplicación).</p>
			
			<p>Esta es solo una recomendación que probablemente cambiará dramáticamente en los próximos años. Algunos navegadores están consultando al usuario si expandir o no el espacio disponible cuando la aplicación lo necesita, pero usted debería ser consciente de esta limitación y tenerla en cuenta a la hora de desarrollar sus aplicaciones.</p>
			</br>
			<p><strong class="resaltado">IMPORTANTE:</strong> Muchos navegadores solo trabajan de forma adecuada con esta API cuando la fuente es un servidor real. Para probar los siguientes códigos, le recomendamos que primero suba los archivos a su servidor.</p>
		
	</section>
	
</section>