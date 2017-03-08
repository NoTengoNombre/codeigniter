

     <section id="contentcontainer"> <!-- Estructura principal de las vistas -->

    <section id="intro">
            <article>
              <h2 class="intro">API CANVAS</h2>
                <p>Esta API ofrece una de las más poderosas características de HTML5. Permite a desarrolladores trabajar con un medio visual e interactivo para proveer capacidades de aplicaciones de escritorio para la web. 
               </p>
               <p>
               	Canvas permite dibujar en la página y actualizar dinámicamente estos dibujos, por medio de scripts y atendiendo a las
acciones del usuario. Las aplicaciones pueden ser grandes como podamos imaginar,
desde juegos, efectos dinámicos en interfaces de usuario, editores de código, editores gráficos, aplicaciones, efectos 3D, etc.

               </p>
               <script>
            
            		var ctx;
					var factorvalue = 1;
					var fontfamily = "65px 'Gill Sans Ultra Bold', sans-serif";
					function iniciar() {
					ctx = document.getElementById('canvas1').getContext('2d');
					ctx.font = fontfamily;
					dologo();
					}

					function dologo() {
					var offsety = 80 ;
					ctx.fillText("HTML", 31,60);
					ctx.translate(0,offsety); 
					 
					// Escudo de fondo fondo naranja
					ctx.fillStyle = "#E34C26";
					ctx.beginPath();
					ctx.moveTo(39, 250);
					ctx.lineTo(17, 0);
					ctx.lineTo(262, 0);
					ctx.lineTo(239, 250);
					ctx.lineTo(139, 278);
					ctx.closePath();
					ctx.fill(); 
					 
					// naranja iluminado de la parte de la derecha
					ctx.fillStyle = "#F06529";
					ctx.beginPath();
					ctx.moveTo(139, 257);
					ctx.lineTo(220, 234);
					ctx.lineTo(239, 20);
					ctx.lineTo(139, 20);
					ctx.closePath();
					ctx.fill(); 
					 
					// Gris claro del 5 de su parte izquierda
					ctx.fillStyle = "#EBEBEB";
					ctx.beginPath();
					ctx.moveTo(139, 113);
					ctx.lineTo(98, 113);
					ctx.lineTo(96, 82);
					ctx.lineTo(139, 82);
					ctx.lineTo(139, 51);
					ctx.lineTo(62, 51);
					ctx.lineTo(70, 144);
					ctx.lineTo(139, 144);
					ctx.closePath();
					ctx.fill(); 
					 
					ctx.beginPath();
					ctx.moveTo(139, 193);
					ctx.lineTo(105, 184);
					ctx.lineTo(103, 159);
					ctx.lineTo(72, 159);
					ctx.lineTo(76, 207);
					ctx.lineTo(139, 225);
					ctx.closePath();
					ctx.fill(); 
					 
					// el 5 en lado de la derecha
					ctx.fillStyle = "#FFFFFF";
					ctx.beginPath();
					ctx.moveTo(139, 113);
					ctx.lineTo(139, 144);
					ctx.lineTo(177, 144);
					ctx.lineTo(173, 184);
					ctx.lineTo(139, 193);
					ctx.lineTo(139, 225);
					ctx.lineTo(202, 207);
					ctx.lineTo(210, 113);
					ctx.closePath();
					ctx.fill(); 
					 
					ctx.beginPath();
					ctx.moveTo(139, 51);
					ctx.lineTo(139, 82);
					ctx.lineTo(213, 82);
					ctx.lineTo(216, 51);
					ctx.closePath();
					ctx.fill();
					}
				window.addEventListener("load", iniciar, false);
            	</script>
            	<canvas id="canvas1" width="600" height="400" style="text-align:center;">
     				Tu navegador no soporta canvas
  			</canvas><br/>
               <a class="ejemplos" target="_blank" href="http://www.felixniklas.de/playground/html5logo/">Ejemplo de Canvas</a><br/><br/>
               <a class="ejemplos" target="_blank" href="http://jayweeks.com/sketchy-structures-html5-canvas/">Ejemplo de Canvas</a>
           </article>  
               
        </section>

        <section id="intro">
            <article>
            	
              <A name="1"></A><h2 class="intro">El Elemento Canvas</h2>
              <p>
              	Este elemento genera un espacio rectangular vacío en la página web (lienzo) en el cual serán mostrados los resultados de ejecutar los métodos provistos por la API. Cuando es creado, produce sólo un espacio en blanco, como un elemento vacío, pero con un propósito totalmente diferente.
			</p>
			<p>
				Se usa la etiqueta <strong class="resaltado">&lt;canvas&gt;</strong>, dentro hay que declarar los atributos width (ancho) y height (alto) que declaran el tamaño del lienzo en pixeles. Estos atributos son necesarios debido a que todo lo que sea dibujado sobre el elemento tendrá esos valores como referencia.<br/>Eso es básicamente todo lo que el elemento <strong class="resaltado">&lt;canvas&gt;</strong> hace. Simplemente crea una caja vacía en la pantalla.<br/><br/>Ejemplo de la creación de un lienzo:
			</p>
			  <pre class="codigo">

            &lt;!DOCTYPE html&gt;
            &lt;html lang="es"&gt;
            &lt;head&gt;
            &lt;title&gt;Canvas API&lt;/title&gt;
            &lt;script&gt;
                …
            &lt;/script&gt;
            &lt;/head&gt;
            &lt;body&gt;
               &lt;section id="cajalienzo"&gt;
               	 &lt;canvas id="lienzo" width="500" height="300"&gt;
                	Su navegador no soporta el elemento canvas
                 &lt;/canvas&gt;
               &lt;/section&gt;
            &lt;/body&gt;
            &lt;/html&gt;

            </pre>
                
           </article>

              <section id="intro">
            <article>
              <a name="2"></a><h2 class="intro">El Elemento getContext()</h2>
              <p>
              	El método <strong class="resaltado">getContext()</strong> es el primer método que tenemos que llamar para dejar al elemento <strong class="resaltado">&lt;canvas&gt;</strong> listo para trabajar. Genera un contexto de dibujo que será  al lienzo asignado
              </p>
              <pre class="codigo">

        function iniciar(){
			var elemento=document.getElementById('lienzo');
			lienzo=elemento.getContext('2d');
	}
	window.addEventListener("load", iniciar, false);

              </pre>
              <p>El método puede tomar dos valores: 2d y 3d. Por el momento solo el contexto 2d está disponible, pero serios esfuerzos están siendo volcados en el desarrollo de una API estable en 3 dimensiones.</p>
              <p>Luego de que el elemento <strong class="resaltado">&lt;canvas&gt;</strong> y su contexto han sido inicializados podemos finalmente comenzar a crear y manipular gráficos. La lista de herramientas provista por la API para este propósito es extensa, desde la creación de simples formas y métodos de dibujo hasta texto, sombras o transformaciones complejas.
              </p>
                
           </article>  
            
        </section>  
            
           <section id="intro">
            <article>
              <a name="3"></a><h2 class="intro">Dibujando Rectangulos</h2>
                <p>Existen algunos métodos que nos permiten dibujar directamente en el lienzo, sin preparación previa. Estos métodos son específicos para formas rectangulares y son los únicos que generan una forma primitiva. Los métodos disponibles son los siguientes:
               </p>
               <p><strong class="resaltado">fillRect(x, y, ancho, alto)</Strong> Este método dibuja un rectángulo sólido. La esquina superior izquierda será ubicada en la posición especificada por los atributos x e y. Los atributos ancho y alto declaran el tamaño.
               </p>
               <p>
               	<strong class="resaltado">strokeRect(x, y, ancho, alto)</strong> Similar al método anterior, éste dibujará un rectángulo vacío (solo su contorno).
               </p>
               <p><strong class="resaltado">clearRect(x, y, ancho, alto)</strong> Esta método es usado para substraer pixeles del área
especificada por sus atributos. Es un borrador rectangular.</p>

				<p><span class="resaltado">Actividad.</span>  Asignando los metodos aprendidos de rectangulos a un elemento canvas, intentar conseguir la imagen correspondiente o parecida.</p>
				<script>

				function iniciar(){
			var elemento=document.getElementById('lienzo1');
			lienzo=elemento.getContext('2d');
			
			lienzo.strokeRect(10,10,100,100);
			lienzo.fillRect(120,120,100,100);
			lienzo.clearRect(170,170,50,50);
			}
			window.addEventListener("load", iniciar, false);
				</script>
				<canvas id="lienzo1" width="500" height="300" style="border:1px solid black;">
				Su navegador no soporta el elemento canvas
				</canvas>
           </article>  
            
        </section>
           <section id="intro">
            <article>
              <h2 class="intro">Dibujando en Bucle</h2>
                <p>Podemos rellenar un lienzo canvas realizando varios dibujos sobre este, por ejemplo con un bucle For:</p>
                <pre class="codigo">

            for (i=0;i<=100;i+=10){ 
                lienzo.fillRect(i,i,5,5); 
            }
                </pre>
                <p>Esto dibujaría una serie de rectángulos, comenzando en la posición (0,0) y continuando con posiciones siempre de 10 píxeles de distancia en ambas coordenadas: (10,10), (20,20) ... Acabando en la coordenada (100,100). Todos los rectángulos serán de 5 píxeles de alto y ancho, luego realmente son cuadrados.
                </p>
                <script>


                	function iniciar(){
			var elemento=document.getElementById('lienzo2');
			lienzo=elemento.getContext('2d');
			
			for (i=0;i<=100;i+=10){ 
                lienzo.fillRect(i,i,5,5); 
            }		


		}
		
	
		window.addEventListener("load", iniciar, false);
                </script>
                <canvas id="lienzo2" width="200" height="200" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>
           </article>  
            
        </section>
           <section id="intro">
            <article>
              <a name="4"></a><h2 class="intro">Colores</h2>
                <p>Hasta el momento hemos usado el color otorgado por defecto, negro sólido, pero
podemos especificar el color que queremos aplicar mediante sintaxis CSS utilizando las siguientes propiedades:

                </p>
                <p><strong class="resaltado">strokeStyle</strong> Esta propiedad declara el color para el contorno de la figura. Ejemplo: <span class="resaltado">lienzo.strokeStyle="#990000";</span>
                </p>
                <p><strong class="resaltado">fillStyle</strong> Esta propiedad declara el color para el interior de la figura.Ejemplo: <span class="resaltado">lienzo.fillStyle="#000099";</span>
                </p>
                <p>
                	<strong class="resaltado">globalAlpha</strong> Esta propiedad no es para definir color sino transparencia. Especifica la
transparencia para todas las figuras dibujadas en el lienzo, la cual debe ser un número entre 0 (transparente) y 1.0 (totalmente opaco).

                </p>
                <p>
                	Además podemos también usar funciones como <strong>rgb()</strong> o incluso especificar transparencia para la figura aprovechando la función <strong>rgba()</strong>. Estos métodos deben ser siempre escritos entre comillas (por ejemplo, <span class="resaltado">strokeStyle="rgba(255,165,0,1)"</span>.
           </p>

           <pre class="codigo">

           	function iniciar(){
                    var canvas=document.querySelector('#lienzo');
                    var context = canvas.getContext("2d");
                    context.fillRect(5, 5, 145, 145);
                    context.fillStyle = "rgb(0, 162, 232)";
                    context.fillRect(40, 55, 145, 145);
                    context.fillStyle = "rgba(255, 0, 0, 0.2)";
                    context.fillRect(75, 105, 145, 145);
                }

            window.addEventListener("load", iniciar, false);

           </pre>
           <script>
                function iniciar(){
                    var canvas=document.querySelector('#lienzo5');
                    var context = canvas.getContext("2d");
                    context.fillRect(5, 5, 145, 145);
                    context.fillStyle = "rgb(0, 162, 232)";
                    context.fillRect(40, 55, 145, 145);
                    context.fillStyle = "rgba(255, 0, 0, 0.2)";
                    context.fillRect(75, 105, 145, 145);


                }

            window.addEventListener("load", iniciar, false);




           </script>
            <canvas id="lienzo5" width="400" height="300" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>
		
           <p><span class="resaltado">Actividad.</span>  Usa las propiedades strokesStyle y fillstyle para declarar un color a los rectangulos de la actividad anterior.</p>
           <a class="ejemplos" target="_blank" href="ejercicios/canvas/rectangulo colores.html">Abrir Ejemplo</a>
           </article>  
            
        </section>

           <section id="intro">
            <article>
              <a name="5"></a><h2 class="intro">Gradientes</h2>
              <p>Gradientes son una herramienta esencial en cualquier programa de dibujo estos días, y esta API no es la excepción. Así como en CSS3, los gradientes en la API Canvas pueden ser lineales o radiales, y pueden incluir puntos de terminación para combinar colores.
              </p>
                <p><strong class="resaltado">createLinearGradient(x1, y1, x2, y2)</strong> Este método crea un objeto que luego será usado para aplicar un gradiente lineal al lienzo.
                </p>
                <p><strong class="resaltado">createRadialGradient(x1, y1, r1, x2, y2, r2)</strong> Este método crea un objeto que luego será usado para aplicar un gradiente circular o radial al lienzo usando dos círculos. Los
valores representan la posición del centro de cada círculo y sus radios.</p>
				<p><strong class="resaltado">addColorStop(posición, color)</strong> Este método especifica los colores a ser usados por el gradiente. El atributo posición es un valor entre 0.0 y 1.0 que determina dónde la
degradación comenzará para ese color en particular.</p><p>Ejemplo de como se usa:</p>
<pre class="codigo">
	Function iniciar(){
		var gradiente=lienzo.createLinearGradient(0,0,10,100);
		gradiente.addColorStop(0.5, '#0000FF');
		gradiente.addColorStop(1, '#000000');
		lienzo.fillStyle=gradiente;
		lienzo.fillRect(0,0,500,150);
	}

</pre>
<script>
function iniciar(){
			var elemento=document.getElementById('lienzo6');
			lienzo=elemento.getContext('2d');
			
			var gradiente=lienzo.createLinearGradient(0,0,10,100);
			gradiente.addColorStop(0.5, '#0000FF');
			gradiente.addColorStop(1, '#000000');
			lienzo.fillStyle=gradiente;
			lienzo.fillRect(0,0,500,150);

		}
		
	
		window.addEventListener("load", iniciar, false);

</script>
<canvas id="lienzo6" width="400" height="200" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>

 <a class="ejemplos" target="_blank" href="ejercicios/canvas/gradientes.html">Abrir Ejemplo</a>
           </article>  
            
        </section>

           <section id="intro">
            <article>
              <a name="6"></a><h2 class="intro">Creando Trazados</h2>
                <p>Un trazado es como un mapa a ser seguido por el lápiz. Una vez declarado, el trazado
será enviado al contexto y dibujado de forma permanente en el lienzo. El trazado puede incluir diferentes tipos de líneas, como líneas rectas, arcos, rectángulos, entre otros, para crear figuras complejas.
</p>
<p>Existen dos métodos para comenzar y cerrar el trazado:
	</p><p><strong class="resaltado">beginPath()</strong> Este método comienza la descripción de una nueva figura. Es llamado en
primer lugar, antes de comenzar a crear el trazado.
</p><p><strong class="resaltado">closePath()</strong> Este método cierra el trazado generando una línea recta desde el último
punto hasta el punto de origen. Puede ser ignorado cuando utilizamos el método
fill() para dibujar el trazado en el lienzo.
</p><p>También contamos con tres métodos para dibujar el trazado en el lienzo:</p>
<p><strong class="resaltado">stroke()</strong> Este método dibuja el trazado como una figura vacía (solo el contorno).</p>
    <p><strong class="resaltado">fill()</strong> Este método dibuja el trazado como una figura sólida. Cuando usamos este método no necesitamos cerrar el trazado con closePath(), el trazado es automáticamente cerrado con una línea recta trazada desde el punto final hasta el origen.</p>      
    <br/><pre class="codigo">

    	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		lienzo.beginPath();
		...Aquí va el trazado...
		lienzo.stroke();
	}
	window.addEventListener("load", iniciar, false);
	
    </pre><br/>

    <p>Para crear el trazado y la figura real que será enviada al contexto y dibujada en el lienzo, contamos con varios métodos disponibles:</p>
    <p><strong class="resaltado">moveTo(x, y)</strong> Este método mueve el lápiz a una posición específica para continuar con el trazado. Nos permite comenzar o continuar el trazado desde diferentes puntos,
evitando líneas continuas.
</p><p><strong class="resaltado">lineTo(x, y)</strong> Este método genera una línea recta desde la posición actual del lápiz hasta la nueva declarada por los atributos x e y.</p>
<pre class="codigo">

	lienzo.beginPath();
	lienzo.moveTo(50,50);
	lienzo.lineTo(50,150);
	lienzo.lineTo(150,150);
   	lienzo.stroke();
		  
	lienzo.beginPath();
	lienzo.moveTo(200,50);
	lienzo.lineTo(200,150);
	lienzo.lineTo(300,150);
   	lienzo.fill();
		 
	lienzo.beginPath();
	lienzo.moveTo(50,200);
	lienzo.lineTo(50,300);
	lienzo.lineTo(150,300);
	lienzo.closePath();
   	lienzo.stroke();


</pre>	

<script>
function iniciar(){
			var elemento=document.getElementById('canvas2');
			lienzo=elemento.getContext('2d');
			
			//TRAZADO
		// a. Forma abierta
		   lienzo.beginPath();
		   lienzo.moveTo(50,50);
		   lienzo.lineTo(50,150);
		   lienzo.lineTo(150,150);
   		   lienzo.stroke();
		   // b. Forma cerrada con  relleno
		   lienzo.beginPath();
		   lienzo.moveTo(200,50);
		   lienzo.lineTo(200,150);
		   lienzo.lineTo(300,150);
   		   lienzo.fill();
		    // c. Forma  cerrada sin relleno
		   lienzo.beginPath();
		   lienzo.moveTo(50,200);
		   lienzo.lineTo(50,300);
		   lienzo.lineTo(150,300);
		   lienzo.closePath();
   		   lienzo.stroke();
		}
		window.addEventListener("load", iniciar, false);

</script>







<canvas id="canvas2" width="400" height="400" style="text-align:center;">
     				Tu navegador no soporta canvas
  			</canvas><br/>
 <a class="ejemplos" target="_blank" href="ejercicios/canvas/trazado.html">Abrir Ejemplo</a><br/><br/>
<p><strong class="resaltado">rect(x, y, ancho, alto)</strong> Este método genera un rectángulo. A diferencia de los métodos
estudiados anteriormente, éste generará un rectángulo que formará parte del trazado
(no directamente dibujado en el lienzo). Los atributos tienen la misma función.

</p>  
<br/>
<p>Ahora que ya sabemos cómo dibujar trazados, es tiempo de ver el resto de las
alternativas con las que contamos para crearlos. Hasta el momento hemos estudiado
cómo generar líneas rectas y formas rectangulares. Para figuras circulares, la API provee tres métodos: <span class="resaltado">arc(), quadraticCurveTo() y bezierCurveTo().




</p><br/><p><strong class="resaltado">arc(x, y, radio, ángulo inicio, ángulo final, dirección)</strong> Este método genera un arco o un círculo en la posición x e y, con un radio y desde un ángulo declarado por sus atributos.</p>
<p>
Los parámetros x, y corresponden con las coordenadas del centro del arco.<br/>
El parámetro radio es el número de píxeles que tiene el arco como radio.<br/>
Por su parte angulo_inicio y angulo_final son los ángulos donde comienza y acaba el radio. Están tomados como si el eje de la horizontal tuviese el ángulo cero.<br/>
Sentido_contrario_del_reloj es un parámetro boleano, donde true significa que el trazo va desde un ángulo de inicio al de fin en el sentido contrario de las agujas del reloj. False indica que ese camino es en dirección contraria.<br/>


	</p>
	<p>
		 El ángulo de inicio y fin no se indican en grados, como podríamos suponer, sino en radianes. Se puede hacer un paso de grados a radianes atendiendo a la siguiente fórmula:

	</p>
	<p class="resaltado">Radianes = número_PI x (grados/180)</p>
	<p>Para convertir grados en radianes podríamos utilizar la siguiente línea de código Javascript:</p>
	<p class="resaltado">var radians = (Math.PI/180)*degrees</p>

	<p>Para comprender los gradianes de una manera más visual, así como la referencia sobre el eje X, que serían los cero grados, se puede ver la siguiente imagen:</p>
	<img src="http://i526.photobucket.com/albums/cc341/agresive_photo/radianes_zps1jmpvsc8.png" style="display:block;margin:auto;padding:2em;"/>




<pre class="codigo">

	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		lienzo.beginPath();
		lienzo.arc(100,100,50,0,Math.PI*2, false);
		lienzo.stroke();
	}
	window.addEventListener("load", iniciar, false);


</pre> 
<p>El método <span class="resaltado">arc()</span> es relativamente sencillo y puede generar círculos parciales o completos, como mostramos en el siguiente ejemplo:</p>


<script>
	function iniciar(){
			var elemento=document.getElementById('lienzo7');
			lienzo=elemento.getContext('2d');
			lienzo.beginPath();
			lienzo.arc(100,100,50,0,Math.PI*2, false);
			//lienzo.closePath();
			lienzo.stroke();

		}
		window.addEventListener("load", iniciar, false);
</script>
<canvas id="lienzo7" width="300" height="200" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>
			 <a class="ejemplos" target="_blank" href="ejercicios/canvas/curvas.html">Abrir Ejemplo</a><br/><br/>



<p><strong class="resaltado">quadraticCurveTo(cpx, cpy, x, y)</strong> Este método genera una curva Bézier cuadrática desde la posición actual del lápiz hasta la posición declarada por los atributos x e y. Los atributos cpx y cpy indican el punto que dará forma a la curva.</p>
</p><p><strong class="resaltado">bezierCurveTo(cp1x, cp1y, cp2x, cp2y, x, y)</strong> Este método es similar al anterior pero agrega dos atributos más para generar una curva Bézier cúbica.</p>         

        

 <p>El método quadraticCurveTo() genera una curva Bézier cuadrática, y el método bezierCurveTo() es para curvas Bézier cúbicas. La diferencia entre estos dos
métodos es que el primero cuenta con un solo punto de control y el segundo con dos,
creando de este modo diferentes tipos de curvas.
</p>
<img src="images/curvas.png" class="centrado" />
<p>Ejemplo de codigo de Curvas cuadráticas:</P>
	<pre class="codigo">

	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		lienzo.beginPath();
		lienzo.moveTo(50,50);
		lienzo.quadraticCurveTo(100,125, 50,200);
		lienzo.moveTo(250,50);
		lienzo.bezierCurveTo(200,125, 300,125, 250,200);
		lienzo.stroke();
	}
	window.addEventListener("load", iniciar, false);

	</pre>
		<script>
		function iniciar(){
			var elemento=document.getElementById('lienzo9');
			lienzo=elemento.getContext('2d');
			lienzo.beginPath();
			lienzo.moveTo(50,50);
			lienzo.quadraticCurveTo(100,125, 50,200);
			lienzo.moveTo(250,50);
			lienzo.bezierCurveTo(200,125, 300,125, 250,200);
			lienzo.stroke();
		}
		
		
		window.addEventListener("load", iniciar, false);
		</script>
	<canvas id="lienzo9" width="400" height="250" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>




 <a class="ejemplos" target="_blank" href="ejercicios/canvas/cuadraticas.html">Abrir Ejemplo</a><br/><br/>
           </article>  
            
        </section>
 <section id="intro">
            <article>
              <a name="7"></a><h2 class="intro" >Estilos de linea</h2>
               <p>El ancho, la terminación y otros aspectos de la línea pueden ser modificados para obtener exactamente el tipo de línea que necesitamos para nuestros dibujos.</p>
           <p><strong class="resaltado">lineWidth</strong> Esta propiedad determina el grosor de la línea. Por defecto el valor es 1.0
unidades.
</p><p><strong class="resaltado">lineCap</strong> Esta propiedad determina la forma de la terminación de la línea. Puede recibir uno de estos tres valores: <span class="resaltado">butt, round y square</span>.</p>
<p><strong class="resaltado">lineJoin</strong> Esta propiedad determina la forma de la conexión entre dos líneas. Los valores posibles son:<span class="resaltado"> round, bevel y miter</span>.</p>
           <p>Las propiedades afectarán el trazado completo. Cada vez que tenemos que cambiar las características de las líneas debemos crear un nuevo trazado.</p>
<a class="ejemplos" target="_blank" href="ejercicios/canvas/estilos.html">Abrir Ejemplo 1</a><br/>
<a class="ejemplos" target="_blank" href="ejercicios/canvas/lineas.html">Abrir Ejemplo 2</a>
           </article>  
              
        </section>

        <section id="intro">
            <article>
              <a name="8"></a><h2 class="intro">Texto</h2>
               <p>Tres propiedades son ofrecidas para configurar texto:</p>
               <p><strong class="resaltado">font</strong> Esta propiedad tiene una sintaxis similar a la propiedad font de CSS, y acepta los
mismos valores.
</p><p><strong class="resaltado">textAlign</strong> Esta propiedad alinea el texto. Existen varios valores posibles:<span class="resaltado"> left (izquierda), right (derecha) y center (centro).</span></p>
           <p><strong class="resaltado">textBaseline</strong> Esta propiedad es para alineamiento vertical. Establece diferentes posiciones para el texto (incluyendo texto Unicode). Los posibles valores son:<span class="resaltado"> top, hanging,middle, alphabetic, ideographic y bottom</span>.</p>
           <p>Dos métodos están disponibles para dibujar texto en el lienzo:<br/>
<strong class="resaltado">strokeText(texto, x, y) </strong>Del mismo modo que el método stroke() para el trazado, este
método dibujará el texto especificado en la posición x,y como una figura vacía.
</p>
<p><strong class="resaltado">fillText(texto, x, y)</strong> Este método es similar al método anterior excepto que esta vez el
texto dibujado será sólido.
</p><p>Ejemplo de código:</p>
<pre class="codigo">

	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		lienzo.font="bold 24px verdana, sans-serif";
		lienzo.textAlign="start";
		lienzo.strokeText("Hola Mundo", 100,100);
	}
	window.addEventListener("load", iniciar, false);


</pre>	
		<script>
		function iniciar(){
			var elemento=document.getElementById('lienzo11');
			lienzo=elemento.getContext('2d');
			lienzo.font="bold 24px verdana, sans-serif";
			lienzo.textAlign="start";
			lienzo.strokeText("Hola Mundo", 100,100);
		}
		window.addEventListener("load", iniciar, false);
		</script>



		<canvas id="lienzo11" width="400" height="200" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>
 <a class="ejemplos" target="_blank" href="ejercicios/canvas/texto.html">Abrir Ejemplo</a><br/><br/>
           </article>  
                  
        </section>
        <section id="intro">
            <article>
              <a name="9"></a><h2 class="intro">Sombras</h2>
               <p>Podemos generar sombras para cada trazado e incluso textos. La API provee cuatro propiedades para hacerlo:</p>
           <p><strong class="resaltado">shadowColor</strong> Esta propiedad declara el color de la sombra usando sintaxis CSS.</p>
<p><strong class="resaltado">shadowOffsetX</strong> Esta propiedad recibe un número para determinar qué tan lejos la sombra estará ubicada del objeto (dirección horizontal).</p>
           <p><strong class="resaltado">shadowOffsetY</strong> Esta propiedad recibe un número para determinar qué tan lejos la sombra estará ubicada del objeto (dirección vertical).</p>
<p><strong class="resaltado">shadowBlur</strong> Esta propiedad produce un efecto de difuminación para la sombra.</p>
<pre class="codigo">

	lienzo.fillStyle="blue";
	lienzo.shadowColor="rgba(0,0,0,0.5)";
	lienzo.shadowOffsetX=4;
	lienzo.shadowOffsetY=4;
	lienzo.shadowBlur=5;
	lienzo.font="bold 50px verdana, sans-serif";
	lienzo.fillText("Mi mensaje ", 50,100);


</pre>
		<script>
		function iniciar(){
			var elemento=document.getElementById('lienzo14');
			lienzo=elemento.getContext('2d');
			lienzo.fillStyle="blue";
			lienzo.shadowColor="rgba(0,0,0,0.5)";
			lienzo.shadowOffsetX=4;
			lienzo.shadowOffsetY=4;
			lienzo.shadowBlur=5;
			lienzo.font="bold 50px verdana, sans-serif";
			lienzo.fillText("Mi mensaje ", 50,100);
		}	
		window.addEventListener("load", iniciar, false);
		</script>
		<canvas id="lienzo14" width="400" height="200" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>




           <a class="ejemplos" target="_blank" href="ejercicios/canvas/sombras.html">Abrir Ejemplo</a><br/><br/>
           </article>  
                  
        </section>

        <section id="intro" class="oculto">
            <article>
              <a name="10"></a><h2 class="intro">Recuperando el estado</h2>
               <p>Canvas API provee dos métodos para grabar y recuperar el estado del lienzo.</p>
               <p><strong class="resaltado">save()</strong> Este método graba el estado del lienzo, incluyendo transformaciones ya aplicadas, valores de propiedades de estilo, etc.
               	<p><strong class="resaltado">restore()</strong> Este método recupera el último estado grabado.</p>
</p>
           </article>  
                  
        </section>

        <section id="intro">
            <article>
              <a name="11"></a><h2 class="intro">globalCompositeOperation</h2>
               <p>Existe una propiedad para determinar cómo una figura es posicionada y combinada con figuras dibujadas previamente en el lienzo. La propiedad es <strong class="resaltado">globalCompositeOperation</strong> y su valor por defecto es <span class="resaltado">source-over</span>, lo que significa que la nueva figura será dibujada sobre las que ya existen en el lienzo.</p>
           <p><strong class="resaltado">source-in</strong> Solo la parte de la nueva figura que se sobrepone a las figuras previas es
dibujada. El resto de la figura, e incluso el resto de las figuras previas, se vuelven
transparentes.
</p><p><strong class="resaltado">source-out</strong> Solo la parte de la nueva figura que no se sobrepone a las figuras previas es dibujada. El resto de la figura, e incluso el resto de las figuras previas, se vuelven
transparentes.
</p><p><strong class="resaltado">lighter</strong> Ambas figuras son dibujadas (nueva y vieja), pero el color de las partes que se
superponen es obtenido adicionando los valores de los colores de cada figura.
</p><p><strong class="resaltado">xor</strong> Ambas figuras son dibujadas (nueva y vieja), pero las partes que se superponen se vuelven transparentes.</p>
<p><strong class="resaltado">destination-over</strong> Este es el opuesto del valor por defecto. Las nuevas figuras son dibujadas detrás de las viejas que ya se encuentran en el lienzo.</p>
  <p><strong class="resaltado">destination-in</strong> Las partes de las figuras existentes en el lienzo que se superponen con la nueva figura son preservadas. El resto, incluyendo la nueva figura, se vuelven
transparentes.
</p><p><strong class="resaltado">destination-out</strong> Las partes de las figuras existentes en el lienzo que no se superponen con la nueva figura son preservadas. El resto, incluyendo la nueva figura, se vuelven transparentes.

</p><p><strong class="resaltado">destination-atop</strong> Las figuras existentes y la nueva son preservadas solo en la parte en la que se superponen.</p>
        <p><strong class="resaltado">darker</strong> Ambas figuras son dibujadas, pero el color de las partes que se superponen es
determinado substrayendo los valores de los colores de cada figura.

</p> <img src="images/global.png" style="padding-left: 0;
    padding-right: 0;
    margin-left: auto;
    margin-right: auto;
    display: block;"/><p style="text-align:center;">Una imagén vale más que mil palabras.</p></span> 
<a class="ejemplos" target="_blank" href="ejercicios/canvas/global.html">Abrir Ejemplo</a><br/><br/>
           </article>  
                  
        </section>

            <section id="intro">
            <article>
             <a name="12"></a> <h2 class="intro">Procesando Imágenes</h2>
               <p>API Canvas no sería nada sin la capacidad de procesar imágenes. Pero incluso cuando las imágenes son un elemento tan importante para una aplicación gráfica, solo un método nativo fue provisto para trabajar con ellas.</p>
          	<p>El método <strong class="resaltado">drawImage()</strong> es el único a cargo de dibujar una imagen en el lienzo. Sin
embargo, este método puede recibir un número de valores que producen diferentes
resultados. 
</p><p><strong class="resaltado">drawImage(imágen, x, y)</strong> Esta sintaxis es para dibujar una imagen en el lienzo en la posición declarada por x e y. El primer valor es una referencia a la imagen que será dibujada.</p>
<p><strong class="resaltado">drawImage(imágen, x, y, ancho, alto)</strong> Esta sintaxis nos permite escalar la imagen antes de dibujarla en el lienzo, cambiando su tamaño con los valores de los atributos ancho y alto.</p>
           <p><strong class="resaltado">drawImage(imágen, x1, y1, ancho1, alto1, x2, y2, ancho2, alto2)</strong> Esta es la sintaxis más compleja. Hay dos valores para cada parámetro. El propósito es cortar partes de la imagen y luego dibujarlas en el lienzo con un tamaño y una posición específica. Los
valores x1 e y1 declaran la esquina superior izquierda de la parte de la imagen que
será cortada. Los valores ancho1 y alto1 indican el tamaño de esta pieza. El resto de
los valores (x2, y2, ancho2 y alto2) declaran el lugar donde la pieza será dibujada en
el lienzo y su nuevo tamaño.
</p>
<pre class="codigo">

	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		var imagen=new Image();
		imagen.src="ruta de la imagen";
			imagen.addEventListener("load", function(){
			lienzo.drawImage(imagen,10,20)
			}, false);
	}
	window.addEventListener("load", iniciar, false);


</pre>

		<script>
	function iniciar2(){
		var elemento=document.getElementById('lienzo16');
		lienzo=elemento.getContext('2d');
		var foto=new Image();
		foto.src="http://www.minkbooks.com/content/snow.jpg";
			foto.addEventListener("load", function(){
			lienzo.drawImage(foto,10,20)
			}, false);
	}
	window.addEventListener("load", iniciar2, false);
		</script>

<canvas id="lienzo16" width="400" height="300" style="border:1px solid black;">
			Su navegador no soporta el elemento canvas
			</canvas>




<a class="ejemplos" target="_blank" href="ejercicios/canvas/drawImage.html">Abrir Ejemplo</a><br/><br/>
           </article>  
                  
        </section>

    <section id="intro">
            <article>
             <a name="13"></a> <h2 class="intro">Patrones</h2>
               <p>Los patrones son simples adiciones que pueden mejorar nuestros trazados. Con esta herramienta podemos agregar textura a nuestras figuras utilizando una imagen.</p>
                <p><strong class="resaltado">createPattern(imágen, tipo)</strong> El atributo imágen es una referencia a la imagen que vamos a usar como patrón, y tipo configura el patrón por medio de cuatro valores: repeat, repeat-x, repeat-y y no-repeat.</p>  
    <pre class="codigo">

    	function iniciar(){
		var elemento=document.getElementById('lienzo');
		lienzo=elemento.getContext('2d');
		var imagen=new Image();
		imagen.src="http://www.minkbooks.com/content/bricks.jpg";
		imagen.addEventListener("load", modificarimagen, false);
	}

	function modificarimagen(e){
		imagen=e.target;
		var patron=lienzo.createPattern(imagen,'repeat');
		lienzo.fillStyle=patron;
		lienzo.fillRect(0,0,300,300);
	}

	window.addEventListener("load", iniciar, false);

	</pre>

	<a class="ejemplos" target="_blank" href="ejercicios/canvas/patrones.html">Abrir Ejemplo</a><br/><br/>
        </section>

            <section id="intro">
            <article>
              <h2 class="intro">Animaciones en el lienzo</h2>
               <p>Las animaciones son creadas por código Javascript convencional. No existen métodos para ayudarnos a animar figuras en el lienzo, y tampoco existe un procedimiento
predeterminado para hacerlo. Básicamente, debemos borrar el área del lienzo que
queremos animar, dibujar las figuras y repetir el proceso una y otra vez. Una vez que las figuras son dibujadas no se pueden mover. Solo borrando el área y dibujando las figuras nuevamente podemos construir una animación. Por esta razón, en juegos o aplicaciones que requieren grandes cantidades de objetos a ser animados, es mejor usar imágenes en lugar de figuras construidas con trazados complejos.

</p>
           </article>  
                  
        </section>

            <section id="intro">
            <article>
              <h2 class="intro">Procesando video en el lienzo</h2>
               <p>Al igual que para animaciones, no hay ningún método especial para mostrar video en el elemento &lt;canvas&gt;. La única manera de hacerlo es tomando cada cuadro del video
desde el elemento &lt;video&gt; y dibujarlo como una imagen en el lienzo usando
drawImage(). Así que básicamente, el procesamiento de video en el lienzo es hecho con la combinación de técnicas ya estudiadas.
</p>
           </article>  
                  
        </section>


        <br/><br/><a href="http://www.desarrolloweb.com/articulos/guia-canvas-html5-desarrolladores.html" style="font-size:25px;">Guía para desarrolladores de CANVAS</a><br/><br/><br/><br/><br/><br/>

</section>
</section>