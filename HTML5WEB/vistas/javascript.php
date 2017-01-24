     <section id="contentcontainer"> <!-- Estructura principal de las vistas -->

    <section id="intro">
            <article>
              <h2 class="intro" >Javascript</h2>
               <p>HTML5 puede ser imaginado como un edificio soportado por tres grandes columnas:
HTML, CSS y Javascript. Javascript es un lenguaje interpretado usado para múltiples propósitos pero solo
considerado como un complemento hasta ahora. Una de las innovaciones que ayudó a cambiar el modo en que vemos Javascript fue el desarrollo de nuevos motores de interpretación, creados para acelerar el procesamiento de código. La clave de los motores más exitosos fue transformar el código Javascript en código máquina para lograr velocidades de ejecución similares a aquellas encontradas en aplicaciones de escritorio. Esta mejorada capacidad permitió superar viejas limitaciones de rendimiento y confirmar el lenguaje Javascript como la mejor opción para la web.</P>
           <p>Para aprovechar esta prometedora plataforma de trabajo ofrecida por los nuevos
navegadores, Javascript fue expandido con interfaces de programación de aplicaciones (APIs). Fueron incorporadas por defecto en
cada navegador para asistir al lenguaje en funciones elementales. Estas nuevas APIs (como
Web Storage, Canvas, y otras) son interfaces para librerías incluidas en navegadores. Los nuevos APIs abren la puerta a cosas hasta ahora imposibles en la
web (sin usar plugins) </p>
</article>  
              
        </section>

           <section id="intro">
            <article>
              <h2 class="intro" >Incorporando Javascript </h2>
               <p>Existen tres técnicas para incorporar código Javascript dentro de HTML. Sin embargo, solo la inclusión de archivos externos es la recomendada a usar en HTML5.</p>
<br/>
               <p class="resaltado subrayado">En Línea</p>
               <p>Esta es una técnica simple para insertar Javascript en nuestro documento que se aprovecha de atributos disponibles en elementos HTML. Estos atributos son manejadores de eventos que ejecutan código de acuerdo a la acción del usuario. </p>
           
               <pre class="codigo">

              &lt;p onclick=”alert(‘hizo clic!’)”&gt;Hacer Clic&lt;/p&gt;

               </pre><p>El uso de Javascript dentro de etiquetas HTML está permitido en HTML5, pero esta clase de práctica no es recomendable. El código HTML se extiende innecesariamente y se hace difícil de mantener y actualizar.</p>
           <br/>
               <p class="resaltado subrayado">Endebido</p>
               <p>En HTML5 no debemos usar ningún atributo para especificar lenguaje. Ya no es necesario incluir el atributo type en la etiqueta &lt;script&gt;. HTML5 asigna Javascript por defecto.</p>
               	<p>Debemos agrupar los códigos en un mismo lugar entre etiquetas &lt;script&gt;. El elemento&lt;script&gt; y su contenido pueden ser posicionados en cualquier lugar del documento, dentro de otros elementos o entre ellos. Para mayor claridad, se recomienda siempre colocar sus códigos Javascript en la cabecera del documento y luego referenciar los elementos a ser afectados usando los métodos Javascript apropiados para ese propósito.</p>
               	


                <p>Actualmente existen tres métodos disponibles para referenciar elementos HTML desde
Javascript: 
</p>	<ul>
<li><span class="resaltado">getElementsByTagName</span> referencia un elemento por su nombre o palabra clave.</li>
<li><span class="resaltado">getElementById</span> referencia un elemento por el valor de su atributo id.</li>
<li><span class="resaltado">getElementsByClassName</span> es una nueva incorporación que nos permite referenciar un elemento por el valor de su atributo class.</li>
</ul><br/><p class="resaltado subrayado">Archivos Externos</p>
<p>Los códigos Javascript crecen exponencialmente cuando agregamos nuevas funciones y aplicamos algunas de las APIs mencionadas previamente. Códigos embebidos incrementan el tamaño de nuestros documentos y los hacen repetitivos. Para reducir los tiempos de descarga, incrementar nuestra productividad y poder distribuir y reusar nuestros códigos en cada documento sin comprometer eficiencia, recomendamos grabar todos los códigos Javascript en uno o más archivos externos y llamarlos usando el atributo src:</p>

	<pre class="codigo">

		&lt;head&gt;
			&lt;title&gt;Este texto es el título del documento&lt;/title&gt;
			&lt;script src=”micodigo.js”&gt;&lt;/script&gt;
		&lt;/head&gt;

	</pre>
           </article>  
              
        </section>


   <section id="intro">
            <article>
              <h2 class="intro" >Nuevos Selectores</h2>
               <p>Para elevar Javascript al nivel que las circunstancias requieren, nuevas alternativas debieron ser incorporadas. Desde ahora podemos seleccionar elementos HTML aplicando toda clase de selectores CSS por medio de los nuevos métodos <span class="resaltado">querySelector()</span> y <span class="resaltado">querySelectorAll()</span>.Los métodos getElementById, getElementsByTagName y getElementsByClassName no son suficientes para contribuir a la integración que este lenguaje necesita y sostener la relevancia que posee dentro de la especificación de HTML5.</p>
           <p class="resaltado subrayado">querySelector()</p>
           <p>Este método retorna el primer elemento que concuerda con el grupo de selectores especificados entre paréntesis. Los selectores son declarados usando comillas y la misma sintaxis CSS.</p>
           <pre class="codigo">

function hacerclic(){
	document.querySelector(“#principal p”).onclick=mostraralerta;
}

function mostraralerta(){
	alert('hizo clic!');
}

window.onload=hacerclic;

           </pre>
           <a class="ejemplos" target="_blank" href="ejercicios/javascript/selectores.html">Abrir Ejemplo</a><br/><br/>
           <p>El propósito de este ejemplo es mostrar que querySelector() acepta toda clase de selectores válidos CSS y ahora, del mismo modo que en CSS, Javascript también provee herramientas importantes para referenciar cada elemento en el documento.
Varios grupos de selectores pueden ser declarados separados por coma. El método querySelector() retornará el primer elemento que concuerde con cualquiera de ellos.
</p>
<p class="resaltado subrayado">querySelectorAll()</p>
<p>En lugar de uno, el método querySelectorAll() retorna todos los elementos que concuerdan con el grupo de selectores declarados entre paréntesis. El valor retornado es un array conteniendo cada elemento encontrado en el orden en el que aparecen en el documento.</p>
           <pre class="codigo">

  	function hacerclic(){
		var lista=document.querySelectorAll("#principal p");
		for(var f=0; f&lt;lista.length; f++){
		lista[f].onclick=mostraralerta;
		}
	}

	function mostraralerta(){
		alert('hizo clic!');
	}
    
    	window.onload=hacerclic;

           </pre>
           <a class="ejemplos" target="_blank" href="ejercicios/javascript/selectorAll.html">Abrir Ejemplo</a><br/><br/>
<p>Para interactuar con una lista de elementos retornados por este método, podemos
utilizar un bucle for.</p>
<p>El método <span class="resaltado">querySelectorAll()</span>, al igual que querySelector(), puede contener
uno o más grupos de selectores separados por coma. Éstos y los demás métodos
pueden ser combinados para referenciar elementos a los que resulta difícil
llegar. Por ejemplo, en el próximo código muestra como combinar querySelectorAll() y getElementById() juntos:</p>
<pre class="codigo">	
  document.getElementById(‘principal’).querySelectorAll(“p”);

</pre><p>Usando esta técnica podemos ver qué precisos pueden ser estos métodos. Podemos
combinarlos en una misma línea y luego realizar una segunda selección con otro método
para alcanzar elementos dentro de los primeros.</p>

<p>También podemos usar las pseudo clases de CSS3 para referenciar con los métodos <span class="resaltado">querySelector</span>. Con las pseudo clases: firstchild,
last-child, only-child, nth-child(), even, etc harémos la selección mas específica.</p>


           </article>  
              
        </section>

      <section id="intro">
            <article>
          <h2 class="intro">Manejadores de eventos</h2>
        
        
        
          <p>El código Javascript es normalmente ejecutado luego
de que el usuario realiza alguna acción. Estas acciones y otros eventos son procesados por
manejadores de eventos y funciones Javascript asociadas con ellos.</p>
<p>Existen tres diferentes formas de registrar un evento para un elemento HTML:
podemos agregar un nuevo atributo al elemento, registrar un manejador de evento como
una propiedad del elemento o usar el nuevo método estándar addEventListener().</p>
         <p class="resaltado subrayado">Manejadores de eventos en línea</p>
         <p>Se trata simplemente de
utilizar los atributos provistos por HTML para registrar eventos para un elemento en
particular. Esta es una técnica en desuso pero aun extremadamente útil y práctica en
algunas circunstancias, especialmente cuando necesitamos hacer modificaciones rápidas
para testeo.</p>
<pre class="codigo">

           &lt;p onclick=”alert(‘hizo clic!’)”&gt;Hacer Clic&lt;/p&gt;

</pre>
<p class="resaltado subrayado">Manejadores de eventos como propiedades</p>
<p>Debemos registrar los eventos
desde el código Javascript. Usando selectores Javascript podemos referenciar el elemento
HTML y asignarle el manejador de eventos que queremos como si fuese una propiedad.<</pre>
<pre class="codigo">

          document.getElementsByTagName('p')[0].onclick.

</pre>
<p>Antes de HTML5, esta era la única técnica disponible para usar manejadores de
eventos desde Javascript que funcionaba en todos los navegadores. Algunos fabricantes
de navegadores estaban desarrollando sus propios sistemas, pero nada fue adoptado por
todos hasta que el nuevo estándar fue declarado. Por este motivo recomendamos utilizar
esta técnica por razones de compatibilidad, pero no la sugerimos para sus aplicaciones
HTML5.</p>

<p class="resaltado subrayado">El método addEventListener()</p>
<p>El método addEventListener() es la técnica ideal y la que es considerada como
estándar por la especificación de HTML5. Este método tiene tres argumentos: el nombre
del evento, la función a ser ejecutada y un valor booleano (falso o verdadero) que indica
cómo un evento será disparado en elementos superpuestos.</p>
<pre class="codigo">

            &lt;!DOCTYPE html&gt;
            &lt;html lang="es"&gt;
            &lt;head&gt;
            &lt;title&gt;Título del documento&lt;/title&gt;
            &lt;script&gt;

              function mostraralerta(){
                alert('hizo clic!');
              }

              function hacerclic(){
                var elemento=document.querySelector("#principal p:first-child");
                elemento.addEventListener('click', mostraralerta, false);
              }

              window.addEventListener('load', hacerclic, false);

            &lt;/script&gt;
            &lt;/head&gt;
            &lt;body&gt;
               &lt;div id="principal"&gt;
                 &lt;p&gt;Hacer Clic &lt;/p&gt;
                 &lt;p&gt;No puede hacer clic &lt;/p&gt;
               &lt;/div&gt;
            &lt;/body&gt;
            &lt;/html&gt;

</pre>
<a class="ejemplos" target="_blank" href="ejercicios/javascript/addevenlisterner.html">Abrir Ejemplo</a><br/><br/>
<p>El
primer atributo es el nombre del evento. El segundo es la función a ser ejecutada, la cual
puede ser una referencia a una función. El
tercer atributo especificará, usando true (verdadero) o false (falso), cómo múltiples
eventos serán disparados. Por ejemplo, si estamos escuchando al evento click en dos
elementos que se encuentran anidados (uno dentro de otro), cuando el usuario hace clic
sobre estos elementos dos eventos click son disparados en un orden que depende de
este valor. Si el atributo es declarado como true para uno de los elementos, entonces ese
evento será considerado primero y el otro luego. Normalmente el valor false es el más
adecuado para la mayoría de las situaciones.</p>

         </article>     
      </section>

<section id="intro">
            <article>
          <h2 class="intro">APIs</h2>
        <p>Javascript es tan poderoso como cualquier otro lenguaje de desarrollo en este momento. Y por la misma razón que lenguajes de programación profesionales poseen librerías para crear elementos gráficos, motores 3D para video juegos o interfaces para acceder a bases de datos, Javascript cuenta con APIs para ayudar a los programadores a lidiar con actividades complejas. </p>
         
         <p>HTML5 introduce varias APIs (interfaces de programación de aplicaciones) para proveer acceso a poderosas librerías desde simple código Javascript.
Veamos rápidamente sus características para obtener una perspectiva, lo siguiente es solo una introducción
</p>
<p class="resaltado subrayado">Canvas</p><p>Canvas es una API gráfica que provee una básica pero poderosa superficie de dibujo. La posibilidad de generar e imprimir
gráficos en pantalla, crear animaciones o manipular imágenes y videos (combinado con la
funcionalidad restante de HTML5) abre las puertas para lo que nos podamos imaginar.
Canvas genera una imagen con pixeles que son creados y manipulados por funciones y
métodos provistos específicamente para este propósito.</p>
  <p class="resaltado subrayado">Drag and Drop</p><p>Drag and Drop incorpora la posibilidad de arrastrar y soltar elementos en la pantalla como
lo haríamos comúnmente en aplicaciones de escritorio. Ahora, con unas pocas líneas de
código, podemos hacer que un elemento esté disponible para ser arrastrado y soltado
dentro de otro elemento en la pantalla.</p>
    <p class="resaltado subrayado">Geolocation</p><p>Esta API tiene la intención de proveer acceso a información correspondiente
con la ubicación física del dispositivo que está accediendo a la aplicación. Puede
retornar datos como la latitud y longitud.</p>
      <p class="resaltado subrayado">Web Storage</p><p>Esta API introduce dos atributos para almacenar datos en el ordenador del
usuario: sessionStorage y localStorage. El atributo sessionStorage permite
a los desarrolladores hacer un seguimiento de la actividad de los usuarios
almacenando información que estará disponible en cada instancia de la aplicación
durante la duración de la sesión. El atributo localStorage, por otro lado, ofrece a los
desarrolladores un área de almacenamiento, creada para cada aplicación, que puede
conservar varios megabytes de información, preservando de este modo información y
datos en el ordenador del usuario de forma persistente.</p>
        <p class="resaltado subrayado">Indexed Database</p><p>Esta API agrega la capacidad de trabajar con bases de datos del lado del
usuario. El sistema fue desarrollado independientemente de previas tecnologías y
provee una base de datos destinada a aplicaciones web. La base de datos es
almacenada en el ordenador del usuario, los datos son persistentes y, por supuesto,
son exclusivos de la aplicación que los creó.</p>
          <p class="resaltado subrayado">File</p><p>Este es un grupo de APIs desarrollada para proveer la capacidad de leer, escribir y
procesar archivos de usuario.</p>
            <p class="resaltado subrayado">XMLHttpRequest Level 2</p><p>Esta API es una mejora de la vieja XMLHttpRequest destinada a
la construcción de aplicaciones Ajax. Incluye nuevos métodos para controlar el
progreso de la operación y realizar solicitudes cruzadas (desde diferentes orígenes).</p>
              <p class="resaltado subrayado">Web Workers</p><p>Esta API potencia Javascript permitiendo el procesamiento de código detrás
de escena, de forma separada del código principal, sin interrumpir la actividad normal
de la página web, incorporando la capacidad de multitarea a este lenguaje.</p>
                <p class="resaltado subrayado">History</p><p>Esta API provee la alternativa de incorporar cada paso en el proceso de una
aplicación dentro del historial de navegación del navegador.</p>
                  <p class="resaltado subrayado">Offline</p><p>Esta API apunta a mantener las aplicaciones funcionales incluso cuando el
dispositivo es desconectado de la red.</p>
        






</article>     
      </section>















</section>