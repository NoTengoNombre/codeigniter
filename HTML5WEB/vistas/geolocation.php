 <section id="contentcontainer"> <!-- HTML5 section tag for the content 'section' -->
    
    	<section id="intro">
            <article>
    		  <h2 class="intro">API Geolocation</h2>
    		  <p>
                La API Geolocation fue diseñada para que los navegadores puedan proveer un mecanismo de detección por defecto que permita a los desarrolladores determinar la ubicación física real del usuario. Previamente solo contábamos con la opción de construir una gran base de datos con información sobre direcciones IP y programar códigos exigentes dentro del servidor que nos darían una idea aproximada de la ubicación del usuario (generalmente tan imprecisa como su país).
              </p>
              <p>
                Esta API aprovecha nuevos sistemas, como triangulación de red y GPS, para retornar una ubicación precisa del dispositivo que está accediendo a la aplicación. La valiosa información retornada nos permite construir aplicaciones que se adaptarán a las particulares necesidades del usuario.
             </p>
    	   </article>			
    	</section>

        <section id="intro">
            <article>
              <h2 class="intro">getCurrentPosition(ubicación)</h2>
              <p>
                Este es el método utilizado para consultas individuales. Puede recibir hasta tres atributos: una función para procesar la ubicación retornada, una función para procesar los errores retornados, y un objeto para configurar cómo la información será adquirida. Solo el primer atributo es requerido para que trabaje correctamente el método getCurrentPosition(). Este atributo es una función que recibirá un objeto llamado Position, el cual contiene toda la información retornada por los sistemas de ubicación.
              </p>
              <br/>
              <p>  El objeto <strong class="resaltado">Position</strong> tiene dos atributos: </p>
              <br/>
              <p>
                <strong class="resaltado">coords</strong> Este atributo contiene un grupo de valores que establecen la ubicación del
dispositivo y otros datos importantes. Atributos internos: <strong class="resaltado">latitude</strong> (latitud en grados), <strong class="resaltado">longitude</strong> (longitud en grados), <strong class="resaltado">altitude</strong> (altitud en metros), <strong class="resaltado">accuracy</strong> (exactitud en metros), <strong class="resaltado">altitudeAccuracy</strong> (exactitud de la altitud en metros), <strong class="resaltado">heading</strong> (dirección en grados) y <strong class="resaltado">speed</strong> (velocidad en metros por segundo).

              </p>
              <p>
                <strong class="resaltado">timestamp</strong> Este atributo indica el momento en el que la información fue adquirida.
            </p>
            <p>
                Veamos un ejemplo práctico de cómo usar este método:
            </p>
            <br/>
            <pre class="codigo">

            &lt;!DOCTYPE html&gt;
            &lt;html lang="es"&gt;
            &lt;head&gt;
            &lt;title&gt;Geolocation&lt;/title&gt;
            &lt;script&gt;
                …
            &lt;/script&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;section id="ubicacion"&gt;
                &lt;button id="obtener" onclick="obtener()"&gt;Obtener mi ubicacion&lt;/button&gt;
                &lt;/section&gt;
            &lt;/body&gt;
            &lt;/html&gt;

            </pre>

            <p>
                Esta plantilla será usada en resto de este capítulo, es lo más elemental posible, con solo un elemento &lt;button&gt; que vamos a usar para solicitar y mostrar la información retornada.
            </p>
            <br/>


            <pre class="codigo">
           
           function obtener(){
            navigator.geolocation.getCurrentPosition(mostrar);
           }
    
           function mostrar(position){
                var ubicacion=document.getElementById('ubicacion');
                var datos='';
                datos+='Latitud: '+position.coords.latitude+';
                datos+='Longitud: '+position.coords.longitude+';
                datos+='Exactitud: '+position.coords.accuracy+' mts.';
                datos+='Altitud: '+position.coords.altitude+' mts.';
                var d = new Date(position.timestamp);
                datos+='Hora: '+d;
                ubicacion.innerHTML=datos;

            }

            </pre>

            <a class="ejemplos" target="_blank" href="ejercicios/geolocation/getCurrentPosition.html">Abrir Ejemplo</a>
            
              
           </article> 
    </section>
    <section id="intro">
        <article>
            <h2 class="intro">getCurrentPosition(ubicación, error)</h2>
            <p>¿Pero qué ocurre si usted no permite al navegador acceder a información acerca de su ubicación? Uno de esos errores, por supuesto, ocurre cuando el usuario no acepta compartir sus datos. </p>
            <p>Junto con el objeto <strong class="resaltado">Position</strong>, el método <strong class="resaltado">getCurrentPosition()</strong> retorna el objeto
<strong class="resaltado">PositionError</strong> si un error es detectado. Este objeto es enviado al segundo atributo de
<strong class="resaltado">getCurrentPosition()</strong>, y tiene dos atributos internos, error y message, para proveer el valor y la descripción del error. Los tres posibles errores son representados por las siguientes constantes:
</p>
<p><strong class="resaltado">PERMISSION_DENIED</strong> (permiso denegado) - valor 1. Este error ocurre cuando el usuario no acepta activar el sistema de ubicación para compartir su información.</p>
<p><strong class="resaltado">POSITION_UNAVAILABLE</strong> (ubicación no disponible) - valor 2. Este error ocurre cuando la ubicación del dispositivo no pudo determinarse por ninguno de los sistemas de ubicación disponibles.</p>
<p><strong class="resaltado">TIMEOUT</strong> (tiempo excedido) - valor 3. Este error ocurre cuando la ubicación no pudo ser determinada en el período de tiempo máximo declarado en la configuración.</p>
        </article>
    </section>  

    <section id="intro">
            <article>
              <h2 class="intro">getCurrentPosition(ubicación, error, configuración)</h2>
            <p>El tercer atributo que podemos usar en el método getCurrentPosition() es un objeto conteniendo hasta tres posibles propiedades:</p>
            <p><strong class="resaltado">enableHighAccuracy</strong> Esta es una propiedad booleana para informar al sistema que requerimos de la información más exacta que nos pueda ofrecer. El navegador intentará obtener esta información a través de sistemas como GPS, por ejemplo, para retornar la ubicación exacta del dispositivo.</p>
           <p><strong class="resaltado">timeout</strong> Esta propiedad indica el tiempo máximo de espera para que la operación finalice. Si la información de la ubicación no es obtenida antes del tiempo indicado, el error TIMEOUT es retornado.
            </P>
            <p><strong class="resaltado">maximumAge</strong> Las ubicaciones encontradas previamente son almacenadas en un caché en el sistema. Si consideramos apropiado recurrir a la información grabada en lugar de intentar obtenerla desde el sistema (para evitar consumo de recursos o para una respuesta rápida), esta propiedad puede ser declarada con un tiempo límite específico. Si la última ubicación almacenada es más vieja que el valor de este atributo entonces una nueva ubicación es solicitada al sistema.</p>
           <br/>
            <pre class="codigo">

            function obtener(){
                var geoconfig={
                    enableHighAccuracy: true,
                    timeout: 10000,
                    maximumAge: 60000
                };
            navigator.geolocation.getCurrentPosition(mostrar, errores, geoconfig);
            }

            function mostrar(posicion){
                var ubicacion=document.getElementById('ubicacion');
                var datos='';
                datos+='Latitud: '+posicion.coords.latitude+';
                datos+='Longitud: '+posicion.coords.longitude+';
                datos+='Exactitud: '+posicion.coords.accuracy+'mts.;
                ubicacion.innerHTML=datos;
            }

            function errores(error){
                alert('Error: '+error.code+' '+error.message);
            }

            </pre> 
            <a class="ejemplos" target="_blank" href="ejercicios/geolocation/getCurrentPosition(ubicación, error, configuración).html">Abrir Ejemplo</a>   
           </article>           
        </section>

        <section id="intro">
            <article>
              <h2 class="intro">watchPosition(ubicación, error, configuración)</h2>
                <p>El método <strong class="resaltado">watchPosition()</strong> recibe tres atributos y realiza la misma tarea: obtener la ubicación del dispositivo que está accediendo a la aplicación. La única diferencia es que el primero realiza una única operación, mientras que <strong class="resaltado">watchPosition()</strong> ofrece nuevos datos cada vez que la ubicación cambia. Este método vigilará todo el tiempo la ubicación y enviará información a la función correspondiente cuando se detecte una nueva ubicación, a menos que cancelemos el proceso con el método <strong class="resaltado">clearWatch()</strong>.</p>
            <pre class="codigo">

            function obtener(){
                var geoconfig={
                enableHighAccuracy: true,
                maximumAge: 60000
                };
                control=navigator.geolocation.watchPosition(mostrar, errores,
                geoconfig);
            }

            function mostrar(posicion){
                var ubicacion=document.getElementById('ubicacion');
                var datos='';
                datos+='Latitud: '+posicion.coords.latitude+';
                datos+='Longitud: '+posicion.coords.longitude+';
                datos+='Exactitud: '+posicion.coords.accuracy+'mts.';
                ubicacion.innerHTML=datos;
            }

            function errores(error){
                alert('Error: '+error.code+' '+error.message);
            }
            
            </pre> 
            <p>No notará ningún cambio en un ordenador de escritorio usando este código, pero en
un dispositivo móvil nueva información será mostrada cada vez que haya una modificación en la ubicación del dispositivo. El atributo maximumAge determina qué tan seguido la información será enviada a la función mostrar(). Si la nueva ubicación es obtenida 60 segundos (60000 milisegundos) luego de la anterior, entonces será mostrada, en caso contrario la función mostrar() no será llamada.
</p>

               
           </article>           
        </section>

        <section id="intro">
            <article>
              <h2 class="intro">Geolocation en Google Maps</h2>
            <p>Hasta el momento hemos mostrado la información sobre la ubicación exactamente como
la recibimos. Sin embargo, estos valores normalmente no significan nada para la gente
común. La mayoría de nosotros no podemos inmediatamente decir cuál es nuestra actual
ubicación en valores de latitud y longitud, y mucho menos identificar a partir de estos
valores una ubicación en el mundo. Disponemos de dos alternativas: usar esta
información internamente para calcular posiciones, distancias y otros valores que nos
permitirán ofrecer resultados específicos a nuestros usuarios (como productos o servicios
en el área), o podemos ofrecer la información obtenida por medio de la API Geolocation
en un medio mucho más comprensible. 
</p>
<p>API Google Maps es una API
Javascript externa, provista por Google, que nada tiene que ver con HTML5 pero es
incluida extraoficialmente dentro de la especificación y es ampliamente utilizada en sitios
webs modernos estos días. Ofrece una variedad de alternativas para trabajar con mapas
interactivos e incluso vistas reales de lugares muy específicos a través de la tecnología
StreetView.
</p>
<p>Vamos a mostrar un ejemplo simple de utilización aprovechando una parte de la API
llamada Static Maps API. Con esta API específica, solo necesitamos construir una URL con
la información de la ubicación para obtener en respuesta la imagen de un mapa con el
área seleccionada.
</p>
<a class="ejemplos" target="_blank" href="ejercicios/geolocation/google maps.html">Abrir Ejemplo</a>
<br/><br/>
<p>Visite la página de Google Maps API para
estudiar las diferentes alternativas provistas por esta API: <a target="_blank" href="https://developers.google.com/maps/?csw=1">code.google.com/
apis/maps/</a>
</p>


           </article>           
        </section>

 </section>
