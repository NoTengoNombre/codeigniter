<section id="contentcontainer"> <!-- Estructura principal de las vistas -->

    
    <section id="intro">
		<article>
			<h2 class="intro">API Drag And Drop</h2>
			<p>Arrastrar un elemento desde un lugar y luego soltarlo en otro es algo que hacemos todo el tiempo en aplicaciones de escritorio, pero ni siquiera imaginamos hacerlo en la web.</p>
			<p>Ahora, gracias a la API Drag and Drop, introducida por la especificación HTML5, finalmente tenemos la oportunidad de crear software para la web que se comportará exactamente como las aplicaciones de escritorio que usamos desde siempre.</p>                
	   </article>
	</section>
	<section id="intro">
		<article>		
			<h2 class="intro">Nuevos eventos</h2>
			<p>Uno de los más importantes aspectos de esta API es un conjunto de siete nuevos eventos introducidos para informar sobre cada una de las situaciones involucradas en el proceso.</p>
			<p>Algunos de estos eventos son disparados por la fuente (el elemento que es arrastrado) y otros son disparados por el destino (el elemento en el cual el elemento arrastrado será soltado).</p>
			<p>Por ejemplo, cuando el usuario realiza una operación de arrastrar y soltar, el elemento origen (el que es arrastrado) dispara estos tres eventos:</p>
			
			<p><strong class="resaltado">dragstart</strong>&nbsp; Este evento es disparado en el momento en el que el arrastre comienza. Los datos asociados con el elemento origen son definidos en este momento en el sistema.</p>
			<p><strong class="resaltado">drag</strong>&nbsp; Este evento es similar al evento mousemove, excepto que será disparado durante una operación de arrastre por el elemento origen.</p>
			<p><strong class="resaltado">dragend</strong>&nbsp; Cuando la operación de arrastrar y soltar finaliza (sea la operación exitosa o no) este evento es disparado por el elemento origen.</p>
			
			<p>Y estos son los eventos disparados por el elemento destino (donde el origen será soltado) durante la operación</p>
			
			<p><strong class="resaltado">dragenter</strong>&nbsp; Cuando el puntero del ratón entra dentro del área ocupada por los posibles elementos destino durante una operación de arrastrar y soltar, este evento es disparado.</p>
			<p><strong class="resaltado">dragover</strong>&nbsp; Este evento es similar al evento mousemove, excepto que es disparado durante una operación de arrastre por posibles elementos destino.</p>
			<p><strong class="resaltado">drop</strong>&nbsp; Cuando el elemento origen es soltado durante una operación de arrastrar y soltar, este evento es disparado por el elemento destino.</p>
			<p><strong class="resaltado">dragleave</strong>&nbsp; Este evento es disparado cuando el ratón sale del área ocupada por un elemento durante una operación de arrastrar y soltar. Este evento es generalmente usado junto con dragenter para mostrar una ayuda visual al usuario que le permita identificar el elemento destino (donde soltar).</p>
			
			<p>Veamos cómo debemos proceder usando un ejemplo simple:</p>
			
			<pre class="codigo">
	
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		&lt;head&gt;
			&lt;title&gt;Drag and Drop&lt;/title&gt;
			&lt;link rel="stylesheet" href="dragdrop.css"&gt;
			&lt;script src="dragdrop.js"&gt;&lt;/script&gt;
		&lt;/head&gt;
		&lt;body&gt;
			&lt;section id="cajasoltar"&gt;
				Arrastre y suelte la imagen aquí
			&lt;/section&gt;
			&lt;section id="cajaimagenes"&gt;
				&lt;img id="imagen" src="http://www.minkbooks.com/content/
				monster1.gif"&gt;
			&lt;/section&gt;
		&lt;/body&gt;
	&lt;/html&gt;

			</pre>
			
			<p>El JavaScript:</p>
			
			<pre class="codigo">
	
	function iniciar(){
		origen1=document.getElementById('imagen');
		
		origen1.addEventListener('dragstart', arrastrado, false);
		
		destino=document.getElementById('cajasoltar');
		
		destino.addEventListener('dragenter', function(e){
			e.preventDefault(); }, false);
			
		destino.addEventListener('dragover', function(e){
			e.preventDefault(); }, false);
			
		destino.addEventListener('drop', soltado, false);
	}
	function arrastrado(e){
		var codigo='&lt;img src="'+origen1.getAttribute('src')+'"&gt;';
		e.dataTransfer.setData('Text', codigo);
	}
	function soltado(e){
		e.preventDefault();
		destino.innerHTML=e.dataTransfer.getData('Text');
	}
	window.addEventListener('load', iniciar, false);

			</pre>
			
			<p>Y el CSS:</p>
			
			<pre class="codigo">
			
	#cajasoltar{
		float: left;
		width: 500px;
		height: 300px;
		margin: 10px;
		border: 1px solid #999999;
	}
	#cajaimagenes{
		float: left;
		width: 320px;
		margin: 10px;
		border: 1px solid #999999;
	}
	#cajaimagenes > img{
		float: left;
		padding: 5px;
	}
			
			</pre>
				
	   </article>
	</section>
	
	<section id="intro">
	
		<article>
			<h2 class="intro">dataTransfer</h2>
			<p>Este es el objeto que contendrá la información en una operación arrastrar y soltar. El objeto <span class="resaltado">dataTransfer</span> tiene varios métodos y propiedades asociados. Ya utilizamos los métodos <span class="resaltado">setData()</span> y <span class="resaltado">getData()</span> en nuestro ejemplo. Junto con <span class="resaltado">clearData()</span>, estos son los métodos a cargo de la información que es transferida:</p>
			
			<p><strong class="resaltado">setData(tipo, dato)</strong> Este método es usado para declarar los datos a ser enviados y su tipo. El método puede recibir tipos de datos regulares (como text/plain, text/html o text/uri-list), tipos de datos especiales (como URL o Text) o incluso tipos de datos personalizados. Un método setData() debe ser llamado por cada tipo de datos que queremos enviar en la misma operación.</p>
			<p><strong class="resaltado">getData(tipo)</strong> Este método retorna los datos enviados por el origen, pero solo del tipo especificado.</p>
			<p><strong class="resaltado">clearData()</strong> Este método remueve los datos del tipo especificado.</p>
			
			<p>El objeto dataTransfer tiene algunos métodos y propiedades más que a veces podrían resultar útil para nuestras aplicaciones:</p>
			
			<p><strong class="resaltado">setDragImage(elemento, x, y)</strong> Algunos navegadores muestran una imagen en miniatura junto al puntero del ratón que representa al elemento que está siendo arrastrado. Este método es usado para personalizar esa imagen y seleccionar la posición la posición en la que será mostrada relativa al puntero del ratón. Esta posición es determinada por los atributos x e y.</p>
			<p><strong class="resaltado">types</strong> Esta propiedad retorna un array conteniendo los tipos de datos que fueron declarados durante el evento dragstart (por el código o el navegador). Podemos grabar este array en una variable (lista=dataTransfer.types) y luego leerlo con un bucle for.</p>
			<p><strong class="resaltado">files</strong> Esta propiedad retorna un array conteniendo información acerca de los archivos que están siendo arrastrados.</p>
			<p><strong class="resaltado">dropEffect</strong> Esta propiedad retorna el tipo de operación actualmente seleccionada. Los posibles valores son none, copy, link y move.</p>
			<p><strong class="resaltado">effectAllowed</strong> Esta propiedad retorna los tipos de operaciones que están permitidas. Puede ser usada para cambiar las operaciones permitidas. Los posibles valores son: <span class="resaltado">none</span>, <span class="resaltado">copy</span>, <span class="resaltado">copyLink</span>, <span class="resaltado">copyMove</span>, <span class="resaltado">link</span>, <span class="resaltado">linkMove</span>, <span class="resaltado">move</span>, <span class="resaltado">all</span> y <span class="resaltado">uninitialized</span>.
			</p>
			<p><strong class="resaltado"></strong> </p>
		</article>
	
	</section>
	<section class="intro">
	
		<article>
		
			<h2 class="intro">dragenter, dragleave y dragend</h2>
			
			<p>Nada fue hecho aún con el evento <span class="resaltado">dragenter</span>. Solo cancelamos el comportamiento por defecto de los navegadores cuando este evento es disparado para prevenir efectos no deseados. Y tampoco aprovechamos los eventos <span class="resaltado">dragleave</span> y <span class="resaltado">dragend</span>. Estos son eventos importantes que nos permitirán ayudar al usuario cuando se encuentra arrastrando objetos por la pantalla.</p>
			
			<pre class="codigo">
			
	function iniciar(){
	
		origen1=document.getElementById('imagen');
		
		origen1.addEventListener('dragstart', arrastrado, false);
		
		origen1.addEventListener('dragend', finalizado, false);
		
		soltar=document.getElementById('cajasoltar');
		
		soltar.addEventListener('dragenter', entrando, false);
		
		soltar.addEventListener('dragleave', saliendo, false);
		
		soltar.addEventListener('dragover', function(e){
			e.preventDefault(); }, false);
			
		soltar.addEventListener('drop', soltado, false);
	}
	function entrando(e){
		e.preventDefault();
		soltar.style.background='rgba(0,150,0,.2)';
	}
	function saliendo(e){
		e.preventDefault();
		soltar.style.background='#FFFFFF';
	}
	function finalizado(e){
		elemento=e.target;
		elemento.style.visibility='hidden';
	}
	function arrastrado(e){
		var codigo='&lt;img src="'+origen1.getAttribute('src')+'"&gt;';
		e.dataTransfer.setData('Text', codigo);
	}
	function soltado(e){
		e.preventDefault();
		soltar.style.background='#FFFFFF';
		soltar.innerHTML=e.dataTransfer.getData('Text');
	}
	window.addEventListener('load', iniciar, false);

			
			</pre>
		
		</article>
		
	</section>
	
	<section class="intro">
		
		<article>
		
			<h2 class="intro">Seleccionando un origen válido</h2>
			
			<p>No existe ningún método específico para detectar si el elemento origen es válido o no. No podemos confiar en la información retornada por el método <span class="resaltado">getData()</span> porque incluso cuando podemos recuperar solo los datos del tipo especificado, otras fuentes podrían originar el mismo tipo y proveer datos que no esperábamos. Hay una propiedad del objeto <span class="resaltado">dataTransfer</span> llamada <span class="resaltado">types</span> que retorna un array con la lista de tipos configurados durante el evento <span class="resaltado">dragstart</span>, pero también es inútil para propósitos de validación.</p>
			
			<p>Por esta razón, las técnicas para seleccionar y validar los datos transferidos en una operación arrastrar y soltar son variados, y pueden ser tan simples o complejos como necesitemos.</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		&lt;head&gt;
			&lt;title&gt;Drag and Drop&lt;/title&gt;
			&lt;link rel="stylesheet" href="dragdrop.css"&gt;
			&lt;script src="dragdrop.js"&gt;&lt;/script&gt;
		&lt;/head&gt;
		&lt;body&gt;
			&lt;section id="cajasoltar"&gt;
				Arrastre y suelte las imágenes aquí
			&lt;/section&gt;
			&lt;section id="cajaimagenes"&gt;
				&lt;img id="imagen1" src="http://www.minkbooks.com/content/monster1.gif"&gt;
				&lt;img id="imagen2" src="http://www.minkbooks.com/content/monster2.gif"&gt;
				&lt;img id="imagen3" src="http://www.minkbooks.com/content/monster3.gif"&gt;
				&lt;img id="imagen4" src="http://www.minkbooks.com/content/monster4.gif"&gt;
			&lt;/section&gt;
		&lt;/body&gt;
	&lt;/html&gt;
			
			</pre>
			
			<p>Usando la nueva plantilla HTML del ejemplo vamos a filtrar los elementos a ser soltados dentro del elemento destino controlando el atributo <span class="resaltado">id</span> de la imagen. El siguiente código Javascript indicará cuál imagen puede ser soltada y cuál no:</p>
			
			<pre class="codigo">
			
	function iniciar(){
	
		var imagenes=document.querySelectorAll('#cajaimagenes &gt; img');
		
	for(var i=0; i&lt;imagenes.length; i++){
		imagenes[i].addEventListener('dragstart', arrastrado, false);
	}
	
	soltar=document.getElementById('cajasoltar');
	
	soltar.addEventListener('dragenter', function(e){
		e.preventDefault(); }, false);
	
	soltar.addEventListener('dragover', function(e){
		e.preventDefault(); }, false);
		
	soltar.addEventListener('drop', soltado, false);
	}
	function arrastrado(e){
		elemento=e.target;
		e.dataTransfer.setData('Text', elemento.getAttribute('id'));
	}
	function soltado(e){
		e.preventDefault();
		var id=e.dataTransfer.getData('Text');
		if(id!="imagen4"){
			var src=document.getElementById(id).src;
			soltar.innerHTML='&lt;img src="'+src+'"&gt;';
		}else{
			soltar.innerHTML='la imagen no es admitida';
		}
	}
	window.addEventListener('load', iniciar, false);

			
			</pre>
			
		</article>
		
	</section>
	
	<section class="intro">
	
		<article>
		
			<h2 class="intro">setDragImage()</h2>
			
			<p>Cambiar la imagen en miniatura que es mostrada junto al puntero del ratón en una operación arrastrar y soltar puede parecer inútil, pero en ocasiones nos evitará dolores de cabeza. El método <span class="resaltado">setDragImage()</span> no solo nos permite cambiar la imagen sino también recibe dos atributos, <span class="resaltado">x</span> e <span class="resaltado">y</span>, para especificar la posición de esta imagen relativa al puntero.</p>
			<p>Algunos navegadores generan una imagen en miniatura por defecto a partir del objeto original que es arrastrado, pero su posición relativa al puntero del ratón es determinada por la posición del puntero cuando el proceso comienza. El método <span class="resaltado">setDragImage()</span> nos permite declarar una posición específica que será la misma para cada operación arrastrar y soltar.</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		&lt;head&gt;
			&lt;title&gt;Drag and Drop&lt;/title&gt;
			&lt;link rel="stylesheet" href="dragdrop.css"&gt;
			&lt;script src="dragdrop.js"&gt;&lt;/script&gt;
		&lt;/head&gt;
		&lt;body&gt;
			&lt;section id="cajasoltar"&gt;
				&lt;canvas id="lienzo" width="500" height="300"&gt;&lt;/canvas&gt;
			&lt;/section&gt;
			&lt;section id="cajaimagenes"&gt;
				&lt;img id="imagen1" src="http://www.minkbooks.com/content/monster1.gif"&gt;
				&lt;img id="imagen2" src="http://www.minkbooks.com/content/monster2.gif"&gt;
				&lt;img id="imagen3" src="http://www.minkbooks.com/content/monster3.gif"&gt;
				&lt;img id="imagen4" src="http://www.minkbooks.com/content/monster4.gif"&gt;
			&lt;/section&gt;
		&lt;/body&gt;
	&lt;/html&gt;

			</pre>
			
			<p>Con el nuevo documento HTML del ejemplo vamos a estudiar la importancia del método <span class="resaltado">setDragImage()</span> usando un elemento <span class="resaltado">&lt;canvas&gt;</span> como el elemento destino.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		var imagenes=document.querySelectorAll('#cajaimagenes &gt; img');
		for(var i=0; i&lt;imagenes.length; i++){
			imagenes[i].addEventListener('dragstart', arrastrado, false);
			imagenes[i].addEventListener('dragend', finalizado, false);
		}
		soltar=document.getElementById('lienzo');
		lienzo=soltar.getContext('2d');
		
		soltar.addEventListener('dragenter', function(e){
			e.preventDefault(); }, false);
		soltar.addEventListener('dragover', function(e){
			e.preventDefault(); }, false);
			
		soltar.addEventListener('drop', soltado, false);
	}
	function finalizado(e){
		elemento=e.target;
		elemento.style.visibility='hidden';
	}
	function arrastrado(e){
		elemento=e.target;
		e.dataTransfer.setData('Text', elemento.getAttribute('id'));
		e.dataTransfer.setDragImage(e.target, 0, 0);
	}
	function soltado(e){
		id = e.dataTransfer.getData('Text');
		
		imagen=document.getElementById(id).src;

		var elemento=new Image();
		elemento.src=imagen;
		
		var posx=e.pageX-soltar.offsetLeft;
		var posy=e.pageY-soltar.offsetTop;
		lienzo.drawImage(elemento,posx,posy);
	}
	window.addEventListener('load', iniciar, false);

			</pre>
				
		</article>
	
	</section>
	
	<section class="intro">
	
		<article>
		
			<h2 class="intro">Archivos</h2>
			
			<p>Posiblemente la característica más interesante de la API Drag and Drop es la habilidad de trabajar con archivos. La API no está solo disponible dentro del documento, sino también integrada con el sistema, permitiendo a los usuarios arrastrar elementos desde el navegador hacia otras aplicaciones y viceversa. Y normalmente los elementos más requeridos desde aplicaciones externas son archivos.
			</p>
			<p>
			Como vimos anteriormente, existe una propiedad especial en el objeto dataTransfer que retornará un array conteniendo la lista de archivos que están siendo arrastrados.
			Podemos usar esta información para construir complejos códigos que trabajan con archivos o subirlos a un servidor.
			</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		&lt;head&gt;
			&lt;title&gt;Drag and Drop&lt;/title&gt;
			&lt;link rel="stylesheet" href="dragdrop.css"&gt;
			&lt;script src="dragdrop.js"&gt;&lt;/script&gt;
		&lt;/head&gt;
		&lt;body&gt;
			&lt;section id="cajasoltar"&gt;
				Arrastre y suelte archivos en este espacio
			&lt;/section&gt;
		&lt;/body&gt;
	&lt;/html&gt;

			</pre>
			
			<p>El documento HTML del ejemplo genera simplemente una caja para soltar los archivos arrastrados. Los archivos serán arrastrados desde una aplicación externa (por ejemplo, el Explorador de Archivos de Windows). Los datos provenientes de los archivos serán procesados por el siguiente código:</p>
			
			<pre class="codigo">
			
	function iniciar(){
		soltar=document.getElementById('cajasoltar');
		soltar.addEventListener('dragenter', function(e){
			e.preventDefault(); }, false);
			
		soltar.addEventListener('dragover', function(e){
			e.preventDefault(); }, false);
			
		soltar.addEventListener('drop', soltado, false);
	}
	function soltado(e){
		e.preventDefault();
		var archivos=e.dataTransfer.files;
		var lista=''”;	
		for(var f=0;f&lt;archivos.length;f++){
			lista+='Archivo: '+archivos[f].name+' '+archivos[f].size+'&lt;br&gt;';
		}
		soltar.innerHTML=lista;
	}
	window.addEventListener('load', iniciar, false);

			</pre>
			
			<p>La información retornada por la propiedad <span>files</span> del objeto dataTransfer puede ser grabada en una variable y luego leída por un bucle for. En el código del ejemplo, solo mostramos el nombre y el tamaño del archivo en el elemento destino usando las propiedades name y size. Para aprovechar esta información y construir aplicaciones más complejas, necesitaremos recurrir a otras APIs y técnicas de programación, como veremos más adelante.</p>
		
		</article>
	
	</section>

</section>