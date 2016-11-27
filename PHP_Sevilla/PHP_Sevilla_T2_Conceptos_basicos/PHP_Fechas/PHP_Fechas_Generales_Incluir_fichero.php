<!--
    @Created on : 24-nov-2016, 12:51:12
    @Author     : RVS - N.F.N.D - Home
    @Pag        : https://diego.com.es/seguridad-en-la-subida-de-archivos-en-php
    @version    :
    @TODO       : 

4. Extensiones dobles en archivos

El caso es similar al anterior, aunque en lugar de comprobar la extensión del archivo, al desarrollador extrae la extensión buscando el carácter '.' en el archivo, y extrayendo el string después del punto.

El método usado para superar esta barrera es algo más complicado, pero todavía relativamente fácil. Apache maneja los archivos de forma que pueden tener más de una extensión, y el orden de las extensiones normalmente es irrelevante. Por ejemplo si un archivo hola.html.es indica que es del tipo text/html y su lenguaje es el español, entonces el archivo hola.es.html contendrá la misma información. Si más de una extensión es dada e indica el mismo tipo de meta información, entonces el de la derecha se usará, excepto para lenguajes y codificación de contenidos. Por ejemplo, si .gif indica el MIME type image/gif y .html indica que es text/html, entonces el archivo hola.gif.html se asociará con el MIME Type text/html.

Por lo tanto, un archivo llamado archivo.php.123 será interpretado como PHP y podrá ejecutarse. Esto sólo funciona si la última extensión .123 no está especificada en la lista de mime-types conocidos por el servidor. Los desarrolladores a veces no son conscientes de esa característica de Apache, y puede ser muy peligrosa. Un atacante puede subir un archivo hey.php.123 y evitar el control de subida. El script comprobará que .123 no está en la lista negra.

Dicho esto, es imposible predecir la cantidad de extensiones que podría subir un atacante.

Una mejor forma de protegerse frente a la subida de archivos es con una lista blanca. En este caso el desarrollador define una lista de extensiones conocidas y no permite extensiones que no estén especificadas en la lista.

Sin embargo esta opción también es vulnerable. Existen dos formas de configurar Apache para ejecutar código PHP: con la directiva AddHandler o con la directiva AddType. Si se usa la directiva AddHandler, todos los archivos que contienen la extensión .php (incluídas tambíen las dobles como .php.jpg) se ejecutarán como script PHP. Si tu configuración de Apache contiene la siguiente línea, es posible que tu script sea vulnerable:
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include './PHP_Fechas_Generales_funcion.ini.php';
    fecha();
    ?>
  </body>
</html>
