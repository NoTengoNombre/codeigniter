    <section id="contentcontainer"> <!-- Estructura principal de las vistas -->
    <section id="intro">
        <article>
        	<h2 class="intro" >API File</h2>
            <p>
            	Esta API posee una infraestructura de bajo nivel, aunque no tan compleja como IndexedDB, y al igual que otras puede trabajar de forma síncrona o asíncrona. La parte síncrona fue desarrollada para ser usada con la API Web Workers (del mismo modo que IndexedDB y otras APIs), y la parte asíncrona está destinada a aplicaciones web convencionales. Estas características nos obligan nuevamente a cuidar cada aspecto del proceso, controlar si la operación fue exitosa o devolvió errores, y probablemente adoptar (o desarrollar nosotros mismos) en el futuro APIs más simples construidas sobre la misma.
           	</p>
			<p>
Trabajar con archivos locales desde aplicaciones web puede ser peligroso. Los navegadores deben considerar medidas de seguridad antes de siquiera contemplar la posibilidad de dejar que las aplicaciones tengan acceso a los archivos del usuario. A este respecto, File API provee solo dos métodos para cargar archivos desde una aplicación: la etiqueta &lt;input&gt;  y la operación arrastrar y soltar.
            </p>
           	
       </article>      
    </section>
</section>