<section id="contentcontainer"> <!-- Estructura principal de las vistas -->

    
    <section id="intro">
		<article>
			<h2 class="intro">API IndexedDB</h2>
			<p>La API estudiada en el capítulo anterior es útil para almacenamiento de pequeñas cantidades de datos, pero cuando se trata de grandes cantidades de datos estructurados debemos recurrir a un sistema de base de datos.</p>               
	   </article>
	</section>
	<section id="intro">
		<article>		
			<h2 class="intro">Una API de bajo nivel</h2>
			<p>IndexedDB es un sistema de base de datos destinado a almacenar información indexada en el ordenador del usuario. Fue desarrollada como una API de bajo nivel con la intención de permitir un amplio espectro de usos. Esto la convierte en una de las API más poderosa de todas, pero también una de las más complejas. El objetivo fue proveer la estructura más básica posible para permitir a los desarrolladores construir librerías y crear interfaces de alto nivel para satisfacer necesidades específicas.</p>
			<p>En una API de bajo nivel como esta tenemos que hacernos cargo de cada aspecto y controlar las condiciones de cada proceso en toda operación realizada. El resultado es una API a la que la mayoría de los desarrolladores tardará en acostumbrarse y probablemente utilizará de forma indirecta a través de otras librerías populares construidas sobre ella que seguramente surgirán en un futuro cercano.</p>
			</br>
			<p>La estructura propuesta por IndexedDB es también diferente de SQL u otros sistemas de base de datos populares. La información es almacenada en la base de datos como objetos (registros) dentro de lo que es llamado Almacenes de Objetos (tablas).</p>
			<p>Los Almacenes de Objetos no tienen una estructura específica, solo un nombre e índices para poder encontrar los objetos en su interior. Estos objetos tampoco tienen una estructura definida, pueden ser diferentes unos de otros y tan complejos como necesitemos. La única condición para los objetos es que contengan al menos una propiedad declarada como índice para que sea posible encontrarlos en el Almacén de Objetos.
			</p>
		</article>
		<article></br>
			<h3 class="intro">Base de datos</h3>
			
			<p>La base de datos misma es simple. Debido a que cada base de datos es asociada con un ordenador y un sitio web o aplicación, no existen usuarios para agregar o restricciones de acceso que debamos considerar. Solo necesitamos especificar el nombre y la versión, y la base de datos estará lista.</p>
			<p>La interface declarada en la especificación para esta API provee el atributo <span class="resaltado">indexedDB</span> y el método <span class="resaltado">open()</span> para crear la base de datos. Este método retorna un objeto sobre el cual dos eventos serán disparados para indicar el éxito o los errores surgidos durante el proceso de creación de la base de datos.</p>
			<p>El segundo aspecto que debemos considerar para crear o abrir una base de datos es la versión. La API requiere que una versión sea asignada a la base de datos.</p>
			<p>Para trabajar con versiones de bases de datos, la API ofrece la propiedad <span class="resaltado">version</span> y el método <span class="resaltado">setVersion()</span>. La propiedad retorna el valor de la versión actual y el método asigna un nuevo valor de versión a la base de datos en uso. Este valor puede ser numérico o cualquier cadena de texto que se nos ocurra.</p>
		</article>
		<article></br>
			<h3 class="intro">Objetos y Almacenes de Objetos</h3>
			
			<p>Lo que solemos llamar registros, en <span class="resaltado">IndexedDB</span> son llamados objetos. Estos objetos incluyen propiedades para almacenar e identificar valores. La cantidad de propiedades y cómo los objetos son estructurados es irrelevante. Solo deben incluir al menos una propiedad declarada como índice para poder encontrarlos dentro del Almacén de Objetos. </p>
			
			<p>Los Almacenes de Objetos (tablas) tampoco tienen una estructura específica. Solo el nombre y uno o más índices deben ser declarados en el momento de su creación para poder encontrar objetos en su interior más tarde. </p>
			</br>
			<img src="images/almacen_de_objetos.png" class="centrado" style="width:70%;" />
			</br>
			<p>Para trabajar con objetos y Almacenes de Objetos solo necesitamos crear el Almacén de Objetos, declarar las propiedades que serán usadas como índices y luego  comenzar a almacenar objetos en este almacén. </p>
			
			<p>La API provee varios métodos para manipular Almacenes de Objetos:</p>
			
			<p><strong class="resaltado">createObjectStore(nombre, clave, autoIncremento)</strong>&nbsp; Este método crea un nuevo Almacén de Objetos con el nombre y la configuración declarada por sus atributos. El atributo nombre es obligatorio. El atributo clave declarará un índice común para todos los objetos. Y el atributo autoIncremento es un valor booleano que determina si el Almacén de Objetos tendrá un generador de claves automático.</p>
			
			<p><strong class="resaltado">objectStore(nombre)</strong>&nbsp; Para acceder a los objetos en un Almacén de Objetos, una transacción debe ser iniciada y el Almacén de Objetos debe ser abierto para esa transacción. Este método abre el Almacén de Objetos con el nombre declarado por el atributo nombre.</p>
			
			<p><strong class="resaltado">deleteObjectStore(nombre)</strong>&nbsp; Este método destruye un Almacén de Objetos con el nombre declarado por el atributo nombre.</p>
			</br>
			<p>Los métodos <span class="resaltado">createObjectStore()</span> y <span class="resaltado">deleteObjectStore()</span>, así como otros métodos responsables de la configuración de la base de datos, pueden solo ser aplicados cuando la base de datos es creada o mejorada en una nueva versión.</p>
			
		</article>
		<article></br>
			<h3 class="intro">Índices</h3>
			
			<p>Para encontrar objetos en un Almacén de Objetos necesitamos declarar algunas propiedades de estos objetos como índices. Una forma fácil de hacerlo es declarar el atributo <span class="resaltado">clave</span> en el método <span class="resaltado">createObjectStore()</span>. La propiedad declarada como <span class="resaltado">clave</span> será un índice común para cada objeto almacenado en ese Almacén de Objetos particular. Cuando declaramos el atributo clave, esta propiedad debe estar presente en todos los objetos.</p>
			
			<p>Además del atributo <span class="resaltado">clave</span> podemos declarar todos los índices que necesitemos para un Almacén de Objetos usando métodos especiales provistos para este propósito:</p>
			
			<p><strong class="resaltado">createIndex(nombre, propiedad, único)</strong>&nbsp; Este método crea un índice para un Almacén de Objetos específico. El atributo <span class="resaltado">nombre</span> es un nombre con el que identificar al índice, el atributo <span class="resaltado">propiedad</span> es la propiedad que será usada como índice, y <span class="resaltado">unique</span> es un valor booleano que indica si existe la posibilidad de que dos o más objetos compartan el mismo valor para este índice.</p>
			
			<p><strong class="resaltado">index(nombre)</strong>&nbsp; Para usar un índice primero tenemos que crear una referencia al índice y luego asignar esta referencia a la transacción. El método <span class="resaltado">index()</span> crea esta referencia para el índice declarado en el atributo <span class="resaltado">nombre</span>.</p>
			
			<p><strong class="resaltado">deleteIndex(nombre)</strong>&nbsp; Si ya no necesitamos un índice podemos eliminarlo usando este método.</p>
			
		</article>
		<article></br>
			<h3 class="intro">Transacciones</h3>
			
			<p>Un sistema de base de datos trabajando en un navegador debe contemplar algunas circunstancias únicas que no están presentes en otras plataformas. El navegador puede fallar, puede ser cerrado abruptamente, el proceso puede ser detenido por el usuario, o simplemente otro sitio web puede ser cargado en la misma ventana, por ejemplo. Existen muchas situaciones en las que trabajar directamente con la base de datos puede causar mal funcionamiento o incluso corrupción de datos. Para prevenir que algo así suceda, cada acción es realizada por medio de transacciones.</p>
			</br>
			<p>El método que genera una transacción se llama <span class="resaltado">transaction()</span>. Para declarar el tipo de transacción, contamos con los siguientes tres atributos:</p>
			
			<p><strong class="resaltado">READ_ONLY</strong>&nbsp; Este atributo genera una transacción de solo lectura. Modificaciones no son permitidas.</p>
			<p><strong class="resaltado">READ_WRITE</strong>&nbsp; Usando este tipo de transacción podemos leer y escribir. Modificaciones son permitidas.</p>
			<p><strong class="resaltado">VERSION_CHANGE</strong>&nbsp; Este tipo de transacción es solo utilizada para actualizar la versión de la base de datos.</p>
			
			<p>Las más comunes son las transacciones de lectura y escritura. Sin embargo, para prevenir un uso inadecuado, el tipo <span class="resaltado">READ_ONLY</span> (solo lectura) es configurado por defecto. </p>
			
		</article>
		<article></br>
			<h3 class="intro">Métodos de Almacenes de Objetos</h3>
			
			<p>Para interactuar con Almacenes de Objetos, leer y almacenar información, la API provee varios métodos:</p>
			
			<p><strong class="resaltado">add(objeto)</strong>&nbsp; Este método recibe un par clave/valor o un objeto conteniendo varios pares clave/valor, y con los datos provistos genera un objeto que es agregado al Almacén de Objetos seleccionado. Si un objeto con el mismo valor de índice ya existe, el método add() retorna un error.</p>
			<p><strong class="resaltado">put(objeto)</strong>&nbsp; Este método es similar al anterior, excepto que si ya existe un objeto con el mismo valor de índice lo sobrescribe. Es útil para modificar un objeto ya almacenado en el Almacén de Objetos seleccionado.</p>
			<p><strong class="resaltado">get(clave)</strong>&nbsp; Podemos leer un objeto específico del Almacén de Objetos usando este método. El atributo clave es el valor del índice del objeto que queremos leer.</p>
			<p><strong class="resaltado">delete(clave)</strong>&nbsp; Para eliminar un objeto del Almacén de Objetos seleccionado solo tenemos que llamar a este método con el valor del índice del objeto a eliminar.</p>
			
		</article>

	</section>
	<section id="intro">
		<article>
			<h2 class="intro">Implementando IndexedDB</h2>
			<p>¡Suficiente con la teoría! Es momento de crear nuestra primera base de datos y aplicar algunos de los métodos ya mencionados en este capítulo. Vamos a simular una aplicación para almacenar información sobre películas. Puede agregar a la base los datos que usted desee, pero para referencia, de aquí en adelante vamos a mencionar los siguientes:</p> 

			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="resaltado">id</span>: tt0068646 <span class="resaltado">nombre</span>: El Padrino <span class="resaltado">fecha</span>: 1972</br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="resaltado">id</span>: tt0086567 <span class="resaltado">nombre</span>: Juegos de Guerra <span class="resaltado">fecha</span>: 1983</br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="resaltado">id</span>: tt0111161 <span class="resaltado">nombre</span>: Cadena Perpetua <span class="resaltado">fecha</span>: 1994</br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="resaltado">id</span>: tt1285016 <span class="resaltado">nombre</span>: La Red Social <span class="resaltado">fecha</span>: 2010</p>
						
	   </article>
	   <article></br>
			<h3 class="intro">Plantilla</h3>
			
			<p>Como siempre, necesitamos un documento HTML y algunos estilos CSS para crear las cajas en pantalla que contendrán el formulario apropiado y la información retornada. El formulario nos permitirá insertar nuevas películas dentro de la base de datos solicitándonos una clave, el título y el año en el que la película fue realizada.</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		 &lt;head&gt;
			&lt;title&gt;IndexedDB API&lt;/title&gt;
			&lt;link rel="stylesheet" href="indexed.css"&gt;
			&lt;script src="indexed.js"&gt;&lt;/script&gt;
		 &lt;/head&gt;
		 &lt;body&gt;
			&lt;section id="cajaformulario"&gt;
				 &lt;form name="formulario"&gt;
				   &lt;p&gt;Clave:&lt;br&gt;&lt;input type="text" name="clave" 
					id="clave"&gt;&lt;/p&gt;				
				   &lt;p&gt;Título:&lt;br&gt;&lt;input type="text" name="texto" 
					id="texto"&gt;&lt;/p&gt;					
				   &lt;p&gt;Año:&lt;br&gt;&lt;input type="text" name="fecha" 
					id="fecha"&gt;&lt;/p&gt;
					
				   &lt;p&gt;&lt;input type="button" name="grabar" id="grabar" 
				   value="Grabar"&gt; &lt;/p&gt;
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
			<h3 class="intro">Abriendo la base de datos</h3>
			
			<p>Lo primero que debemos hacer en el código Javascript es abrir la base de datos. El atributo <span class="resaltado">indexedDB</span> y el método <span class="resaltado">open()</span> abren la base con el nombre declarado o crean una nueva si no existe:</p>
			
			<pre class="codigo">
			
	function iniciar(){
		cajadatos=document.getElementById('cajadatos');
		var boton=document.getElementById('grabar');
		
		boton.addEventListener('click', agregarobjeto, false);
			if('webkitIndexedDB' in window){
			
				window.indexedDB=window.webkitIndexedDB;
				
				window.IDBTransaction=window.webkitIDBTransaction;
				
				window.IDBKeyRange=window.webkitIDBKeyRange;
				
				window.IDBCursor=window.webkitIDBCursor;
				
			}else if('mozIndexedDB' in window){
				window.indexedDB=window.mozIndexedDB;
			}
		var solicitud=indexedDB.open('mibase');
		
		solicitud.addEventListener('error', errores, false);
		solicitud.addEventListener('success', crear, false);
	}

			</pre>
			
			<p>Los eventos son una parte importante de esta API. IndexedDB es una API síncrona y asíncrona. La parte síncrona está siendo desarrollada en estos momentos y está destinada a trabajar con la API Web Workers. En cambio, la parte asíncrona está destinada a un uso web normal y ya se encuentra disponible. </p>
			
			<p>Luego de que la API procesa la solicitud para la base de datos, un evento <span class="resaltado">error</span> o <span class="resaltado">success</span> es disparado de acuerdo al resultado y una de las funciones <span class="resaltado">errores()</span> o <span class="resaltado">crear()</span> es ejecutada para controlar los errores o continuar con la definición de la base de datos, respectivamente.</p>
			
		</article>	
		<article></br>
			<h3 class="intro">Versión de la base de datos</h3>
			
			<p>Antes de comenzar a trabajar en el contenido de la base de datos, debemos seguir algunos pasos para completar su definición. Como dijimos anteriormente, las bases de datos IndexedDB usan versiones. Cuando la base de datos es creada, un valor <span class="resaltado">null</span> (nulo) es asignado a su versión. Por lo tanto, controlando este valor podremos saber si la base de datos es nueva o no:</p>
			
			<pre class="codigo">
			
	function errores(e){
		alert('Error: '+e.code+' '+e.message);
	}
	
	function crear(e){
	
		bd=e.result || e.target.result;
		
		if(bd.version==''){
		
			var solicitud=bd.setVersion('1.0');
			
			solicitud.addEventListener('error', errores, false);
			solicitud.addEventListener('success', crearbd, false);
		}
	}

			</pre>
			
			<p><strong class="resaltado">IMPORTANTE</strong>: En este momento algunos navegadores envían el objeto <span class="resaltado">result</span> a través del evento y otros a través del elemento que disparó el evento. Para seleccionar la referencia correcta de forma automática, usamos la lógica <span class="resaltado">e.result</span> || <span class="resaltado">e.target.result</span>. Seguramente usted deberá usar solo uno de estos valores en sus aplicaciones cuando las implementaciones estén listas.</p>
			</br>
			<p>La interface IDBDatabase provee la propiedad <span class="resaltado">version</span> para informar el valor de la versión actual y también provee el método <span class="resaltado">setVersion()</span> para declarar una nueva versión.</p>
			
			<p>El método <span class="resaltado">setVersion()</span> recibe una cadena de texto que puede ser un número o cualquier valor que se nos ocurra, solo debemos estar seguros de que siempre usamos el mismo valor en cada código para abrir la versión correcta de la base de datos.</p>
			
		</article>
		<article></br>
			<h3 class="intro">Almacenes de Objetos e índices</h3>
			
			<p>A este punto debemos comenzar a pensar sobre la clase de objetos que vamos a almacenar y cómo vamos a leer más adelante la información contenida en los Almacenes de Objetos. Si hacemos algo mal o queremos agregar algo en la configuración de nuestra base de datos en el futuro deberemos declarar una nueva versión y migrar los datos desde la anterior, por lo que es importante tratar de organizar todo lo mejor posible desde el principio. Esto es debido a que la creación de Almacenes de Objetos e índices solo es posible durante una transacción <span class="resaltado">setVersion</span>.</p>
			
			<pre class="codigo">
			
	function crearbd(){
	
		var almacen=bd.createObjectStore('peliculas',{keyPath:'id'});
		
		almacen.createIndex('BuscarFecha', 'fecha',{unique: false});
		
	}

			</pre>
			
		</article>
		<article></br>
			<h3 class="intro">Agregando Objetos</h3>
			
			<p>Por el momento tenemos una base de datos con el nombre mibase que tendrá el valor de versión 1.0 y contendrá un Almacén de Objetos llamado peliculas con dos índices: id y fecha. Con esto ya podemos comenzar a agregar objetos en el almacén:</p>
			
			<pre class="codigo">
			
	function agregarobjeto(){
	
		var clave=document.getElementById('clave').value;
		var titulo=document.getElementById('texto').value;
		var fecha=document.getElementById('fecha').value;
		
		var transaccion=bd.transaction(['peliculas'], IDBTransaction.READ_WRITE);
		
		var almacen=transaccion.objectStore('peliculas');
		
		var solicitud=almacen.add({id: clave, nombre: titulo, fecha:fecha});
		
		solicitud.addEventListener('success', function(){ mostrar(clave) }, false);
		
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
		document.getElementById('fecha').value='';
	}
			
			</pre>
			
		</article>
		<article></br>
			<h3 class="intro">Leyendo Objetos</h3>
			
			<p>Si el objeto es correctamente almacenado, el evento <span class="resaltado">success</span> es disparado y la función <span class="resaltado">mostrar()</span> es ejecutada. En el código del ejemplo, esta función fue llamada dentro de una función anónima para poder pasar la variable <span class="resaltado">clave</span>. Ahora vamos a tomar este valor para leer el objeto previamente almacenado:</p>
			
			<pre class="codigo">
			
	function mostrar(clave){
	
		var transaccion=bd.transaction(['peliculas']);
		var almacen=transaccion.objectStore('peliculas');
		var solicitud=almacen.get(clave);
		
		solicitud.addEventListener('success', mostrarlista, false);
	}
	
	function mostrarlista(e){
	
		var resultado=e.result || e.target.result;
		
		cajadatos.innerHTML='&lt;div&gt;'+resultado.id+' - '+resultado.nombre+' - 
			'+resultado.fecha+'&lt;/div&gt;';
	}
	
			</pre>
			
		</article>
		<article></br>
			<h3 class="intro">Finalizando el código</h3>
			
			<p>Del mismo modo que cualquier código previo, el ejemplo debe ser finalizado agregando una escucha para el evento <span class="resaltado">load</span> que ejecute la función <span class="resaltado">iniciar()</span> tan pronto como la aplicación es cargada en la ventana del navegador:</p>
			
			<pre class="codigo">
			
	window.addEventListener('load', iniciar, false);
			
			</pre>
			
		</article>
					
	</section>
	<section id="intro">
		<article>
			<h2 class="intro">Listando datos</h2>
			</br>
			<h3 class="intro">Cursores</h3>
			
			<p>Los cursores son una alternativa ofrecida por la API para obtener y navegar a través de un grupo de objetos encontrados en la base de datos. Un cursor obtiene una lista específica de objetos de un Almacén de Objetos e inicia un puntero que apunta a un objeto de la lista a la vez.</p>
			
			<p>Para generar un cursor, la API provee el método openCursor(). Este método extrae información del Almacén de Objetos seleccionado y retorna un objeto IDBCursor que tiene sus propios atributos y métodos para manipular el cursor:</p>
			
			<p><strong class="resaltado">continue()</strong>&nbsp; Este método mueve el puntero del cursor una posición y el e evento success es también disparado, pero retorna un objeto vacío. El puntero puede ser movido a una posición específica declarando un valor de índice dentro de los paréntesis.</p>
			<p><strong class="resaltado">delete()</strong>&nbsp; Este método elimina el objeto en la posición actual del cursor.</p>
			<p><strong class="resaltado">update(valor)</strong>&nbsp; Este método es similar a put() pero modifica el valor del objeto en la posición actual del cursor.</p>
			
			<p>El método <span class="resaltado">openCursor()</span> también tiene atributos para especificar el tipo de objetos retornados y su orden. Los valores por defecto retornan todos los objetos disponibles en el Almacén de Objetos seleccionado, organizados en orden ascendente.</p>
			
			<pre class="codigo">
			
	function iniciar(){
		cajadatos=document.getElementById('cajadatos');
		var boton=document.getElementById('grabar');
		boton.addEventListener('click', agregarobjeto, false);
		
		if('webkitIndexedDB' in window){
			window.indexedDB=window.webkitIndexedDB;
			window.IDBTransaction=window.webkitIDBTransaction;
			window.IDBKeyRange=window.webkitIDBKeyRange;
			window.IDBCursor=window.webkitIDBCursor;
		}else if('mozIndexedDB' in window){
			window.indexedDB=window.mozIndexedDB;
		}
		var solicitud=indexedDB.open('mibase');
		solicitud.addEventListener('error', errores, false);
		solicitud.addEventListener('success', crear, false);
	}
	function errores(e){
		alert('Error: '+e.code+' '+e.message);
	}
	function crear(e){
		bd=e.result || e.target.result;
		
		if(bd.version==''){
			var solicitud=bd.setVersion('1.0');
			solicitud.addEventListener('error', errores, false);
			solicitud.addEventListener('success', crearbd, false);
		}else{
			mostrar();
		}
	}
	function crearbd(){
		var almacen=bd.createObjectStore('peliculas',{keyPath: 'id'});
		almacen.createIndex('BuscarFecha', 'fecha',{unique: false});
	}
	function agregarobjeto(){
		var clave=document.getElementById('clave').value;
		var titulo=document.getElementById('texto').value;
		var fecha=document.getElementById('fecha').value;
		var transaccion=bd.transaction(['peliculas'], IDBTransaction.READ_WRITE);
		var almacen=transaccion.objectStore('peliculas');
		var solicitud=almacen.add({id: clave, nombre: titulo, fecha:  fecha});
		
		solicitud.addEventListener('success', mostrar, false);
		
		document.getElementById('clave').value='';
		document.getElementById('texto').value='';
		document.getElementById('fecha').value='';
	}
	function mostrar(){
		cajadatos.innerHTML='';
		var transaccion=bd.transaction(['peliculas']);
		var almacen=transaccion.objectStore('peliculas');
		var cursor=almacen.openCursor();
		cursor.addEventListener('success', mostrarlista, false);
	}
	function mostrarlista(e){
		var cursor=e.result || e.target.result;
		
		if(cursor){
			cajadatos.innerHTML+='&lt;div&gt;'+cursor.value.id+' - '+cursor.value.nombre+' - 
				'+cursor.value.fecha+'&lt;/div&gt;';
			cursor.continue();
		}
	}
	window.addEventListener('load', iniciar, false);

			
			</pre>
			
			<p>Este Almacén de Objetos es seleccionado como el involucrado en la transacción y luego el cursor es abierto sobre este almacén usando el método <span class="resaltado">openCursor()</span>.</p>

			<p>Si la operación es exitosa, un objeto es retornado con toda la información obtenida del Almacén de Objetos, un evento <span class="resaltado">success</span> es disparado desde este objeto y la función <span class="resaltado">mostrarlista()</span> es ejecutada.</p>
			
			<p>Para leer la información, el objeto retornado por la operación ofrece varios atributos:</p>
			
			<p><strong class="resaltado">key</strong>&nbsp; Este atributo retorna el valor de la clave del objeto en la posición actual del cursor.</p>
			<p><strong class="resaltado">value</strong>&nbsp; Este atributo retorna el valor de cualquier propiedad del objeto en la posición actual del cursor. El nombre de la propiedad debe ser especificado como una propiedad del atributo (por ejemplo, <span class="resaltado">value.fecha</span>). </p>
			<p><strong class="resaltado">direction</strong>&nbsp; Los objetos pueden ser leídos en orden ascendente o descendente (como veremos más adelante); este atributo retorna la condición actual en la cual son leídos.</p>
			<p><strong class="resaltado">count</strong>&nbsp; Este atributo retorna en número aproximado de objetos en el cursor. En la función <span class="resaltado">mostrarlista()</span> del ejemplo, usamos el condicional <span class="resaltado">if</span> para controlar el contenido del cursor. Si ningún objeto es retornado o el puntero alcanza el final de la lista, entonces el objeto estará vacío y el bucle no es continuado. Sin embargo,cuando el puntero apunta a un objeto válido, la información es mostrada en pantalla y el puntero es movido hacia la siguiente posición con <span class="resaltado">continue()</span>.</p>
			
			<p>Es importante mencionar que no debemos usar un bucle <span class="resaltado">while</span> aquí debido a que el método <span class="resaltado">continue()</span> dispara nuevamente el evento <span class="resaltado">success</span> del cursor y la función completa es ejecutada para leer el siguiente objeto retornado.</p>
			
		</article>
		<article></br>
			<h3 class="intro">Finalizando el código</h3>
			
			<p>Hay dos detalles que necesitamos modificar para obtener la lista que queremos. Todas las películas en nuestro ejemplo están listadas en orden ascendente y la propiedad usada para organizar los objetos es <span class="resaltado">id</span>. Esta es la propiedad declarada como el atributo <span class="resaltado">clave</span> cuando el Almacén de Objetos <span class="resaltado">peliculas</span> fue creado, y es por tanto el índice usado por defecto. Pero ésta clase de valores no es lo que a nuestros usuarios normalmente les interesa.</p>
			
			<p>Considerando esta situación, creamos otro índice en la función <span class="resaltado">crearbd()</span>. El nombre de este índice adicional fue declarado como <span class="resaltado">BuscarFecha</span> y la propiedad asignada al mismo es <span class="resaltado">fecha</span>. Este índice nos permitirá ordenar las películas de acuerdo al valor del año en el que fueron filmadas.</p>
			
			<pre class="codigo">
			
	function mostrar(){
		cajadatos.innerHTML='';
		
		var transaccion=bd.transaction(['peliculas']);
		var almacen=transaccion.objectStore('peliculas');
		var indice=almacen.index('BuscarFecha');
		var cursor=indice.openCursor(null, IDBCursor.PREV);
		
		cursor.addEventListener('success', mostrarlista, false);
	}
			
			</pre>
			
			<p>Existen dos atributos que podemos especificar en <span class="resaltado">openCursor()</span> para seleccionar y ordenar la información obtenida por el cursor. El primer atributo declara el rango dentro del cual los objetos serán seleccionados y el segundo es una de las siguientes constantes:</p>
			</br>
			<p><strong class="resaltado">NEXT (siguiente)</strong>&nbsp; El orden de los objetos retornados será ascendente (este es el valor por defecto).</p>
			<p><strong class="resaltado">NEXT_NO_DUPLICATE (siguiente no duplicado)</strong>&nbsp; El orden de los objetos retornados será ascendente y los objetos duplicados serán ignorados (solo el primer objeto es retornado si varios comparten el mismo valor de índice).</p>
			<p><strong class="resaltado">PREV (anterior)</strong>&nbsp; El orden de los objetos retornados será descendente.</p>
			<p><strong class="resaltado">PREV_NO_DUPLICATE (anterior no duplicado)</strong>&nbsp; El orden de los objetos retornados será descendente y los objetos duplicados serán ignorados (solo el primer objeto es retornado si varios comparten el mismo valor de índice).</p>
			</br>
			<p>Con el método <span class="resaltado">openCursor()</span> usado en la función <span class="resaltado">mostrar()</span> en el ejemplo, obtenemos los objetos en orden descendente y declaramos el rango como <span class="resaltado">null</span>.</p>
			
		</article>
		
	</section>
	<section id="intro">
		<article>
			<h2 class="intro">Eliminando datos</h2>
			
			<p>Hemos aprendido cómo agregar, leer y listar datos. Es hora de estudiar la posibilidad de eliminar objetos de un Almacén de Objetos. Como mencionamos anteriormente, el método <span class="resaltado">delete()</span> provisto por la API recibe un valor y elimina el objeto con la clave correspondiente a ese valor.</p>
			
			<p>El código es sencillo; solo necesitamos crear un botón para cada objeto listado en pantalla y generar una transacción <span class="resaltado">READ_WRITE</span> para poder realizar la operación y eliminar el objeto:</p>
			
			<pre class="codigo">
			
	function mostrarlista(e){
		var cursor=e.result || e.target.result;
		if(cursor){
		
			cajadatos.innerHTML+='&lt;div&gt;'+cursor.value.id+' - 
				'+cursor.value.nombre+' - '+cursor.value.fecha+' 
				&lt;button onclick="eliminar(\''+cursor.value.id+'\')"&gt;
					Eliminar&lt;/button&gt;&lt;/div&gt;';
				
			cursor.continue();
		}
	}
	function eliminar(clave){
		if(confirm('Está Seguro?')){
		
			var transaccion=bd.transaction(['peliculas'], IDBTransaction.READ_WRITE);
			var almacen=transaccion.objectStore('peliculas');
			var solicitud=almacen.delete(clave);
			
			solicitud.addEventListener('success', mostrar, false);
		}
	}
			
			</pre>
			
			<p>Al final, si la operación fue exitosa, el evento success es disparado y la función mostrar() es ejecutada para actualizar la lista de películas en pantalla.</p>
			
		</article>
	</section>
	<section id="intro">
		<article>
			<h2 class="intro">Buscando datos</h2>
			
			<p>Probablemente la operación más importante realizada en un sistema de base de datos es la búsqueda. El propósito absoluto de esta clase de sistemas es indexar la información almacenada para facilitar su posterior búsqueda. Como estudiamos anteriormente es este capítulo, el método <span class="resaltado">get()</span> es útil para obtener un objeto por vez cuando conocemos el valor de su clave, pero una operación de búsqueda es usualmente más compleja que esto.</p>
			
			<p>Para obtener una lista específica de objetos desde el Almacén de Objetos, tenemos que pasar un rango como argumento para el método openCursor(). La API incluye la interface IDBKeyRange con varios métodos y propiedades para declarar un rango y limitar los objetos retornados:</p>
			
			<p><strong class="resaltado">only(valor)</strong>&nbsp; Solo los objetos con la clave que concuerda con valor son retornados. Por ejemplo, si buscamos películas por año usando only(“1972”), solo la película El Padrino será retornada desde el almacén.</p>
			
			<p><strong class="resaltado">bound(bajo, alto, bajoAbierto, altoAbierto)</strong>&nbsp; Para realmente crear un rango, debemos contar con valores que indiquen el comienzo y el final de la lista, y además especificar si esos valores también serán incluidos. El valor del atributo bajo indica el punto inicial de la lista y el atributo alto es el punto final. Los atributos bajoAbierto y altoAbierto son valores booleanos usados para declarar si los objetos que concuerdan exactamente con los valores de los atributos bajo y alto serán ignorados.</p>
			
			<p><strong class="resaltado">lowerBound(valor, abierto)</strong>&nbsp; Este método crea un rango abierto que comenzará por valor e irá hacia arriba hasta el final de la lista. Por ejemplo, lowerBound(“1983”, true) retornará todas las películas hechas luego de 1983 (sin incluir las filmadas en ese año en particular).</p>
			
			<p><strong class="resaltado">upperBound(valor, abierto)</strong>&nbsp; Este es el opuesto al anterior. Creará un rango abierto, pero los objetos retornados serán todos los que posean un valor de índice menor a valor. Por ejemplo, upperBound(“1983”, false) retornará todas las películas hechas antes de 1983, incluyendo las realizadas ese mismo año (el atributo abierto fue declarado como false).</p>
			</br>
			<p>Preparemos primero una nueva plantilla para presentar un formulario en pantalla con el que se pueda buscar películas:</p>
			
			<pre class="codigo">
			
	&lt;!DOCTYPE html&gt;
	&lt;html lang="es"&gt;
		 &lt;head&gt;
			&lt;title&gt;IndexedDB API&lt;/title&gt;
			&lt;link rel="stylesheet" href="indexed.css"&gt;
			&lt;script src="indexed.js"&gt;&lt;/script&gt;
		 &lt;/head&gt;
		 &lt;body&gt;
			&lt;section id="cajaformulario"&gt;
			
				 &lt;form name="formulario"&gt;
				 
					&lt;p&gt;Buscar Película por Año:&lt;br&gt;&lt;input type="search"
						name="fecha" id="fecha"&gt;&lt;/p&gt;
						
					&lt;p&gt;&lt;input type="button" name="buscar" id="buscar"
						value="Buscar"&gt;&lt;/p&gt;
						
				  &lt;/form&gt;
				  
			&lt;/section&gt;
			&lt;section id="cajadatos"&gt;
				No hay información disponible
			&lt;/section&gt;
		 &lt;/body&gt;
	&lt;/html&gt;
			
			</pre>
			
			<p>Este nuevo documento HTML provee un botón y un campo de texto donde ingresar el año para buscar películas de acuerdo a un rango especificado en el siguiente código:</p>
			
			<pre class="codigo">
			
	function iniciar(){
	
		cajadatos=document.getElementById('cajadatos');
		var boton=document.getElementById('buscar');
		boton.addEventListener('click', buscarobjetos, false);
		
		if('webkitIndexedDB' in window){
		
			window.indexedDB=window.webkitIndexedDB;
			window.IDBTransaction=window.webkitIDBTransaction;
			window.IDBKeyRange=window.webkitIDBKeyRange;
			window.IDBCursor=window.webkitIDBCursor;
			
		}else if('mozIndexedDB' in window){
		
			window.indexedDB=window.mozIndexedDB;
			
		}
		var solicitud=indexedDB.open('mibase');
		solicitud.addEventListener('error', errores, false);
		solicitud.addEventListener('success', crear, false);
	}
	function errores(e){
		alert('Error: '+e.code+' '+e.message);
	}
	function crear(e){
		bd=e.result || e.target.result;
		
		if(bd.version==''){
			var solicitud=bd.setVersion('1.0');
			solicitud.addEventListener('error', errores, false);
			solicitud.addEventListener('success', crearbd, false);
		}
	}
	function crearbd(){
		var almacen=bd.createObjectStore('peliculas', {keyPath: 'id'});
		almacen.createIndex('BuscarFecha', 'fecha', { unique: false });
	}
	function buscarobjetos(){
	
		cajadatos.innerHTML='';
		
		var buscar=document.getElementById('fecha').value;
		var transaccion=bd.transaction(['peliculas']);
		var almacen=transaccion.objectStore('peliculas');
		var indice=almacen.index('BuscarFecha');
		var rango=IDBKeyRange.only(buscar);
		var cursor=indice.openCursor(rango);
		
		cursor.addEventListener('success', mostrarlista, false);
	}
	function mostrarlista(e){
	
		var cursor=e.result || e.target.result;
		if(cursor){
		
			cajadatos.innerHTML+='&lt;div&gt;'+cursor.value.id+' -
				'+cursor.value.nombre+' - '+cursor.value.fecha+'&lt;/div&gt;';
			cursor.continue();
			
		}
	}
	window.addEventListener('load', iniciar, false);
			
			</pre>
			
		</article>
	</section>
</section>