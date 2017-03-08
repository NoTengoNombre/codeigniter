<!--
    @Created on : 30-dic-2016, 12:58:27
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

Campo BLOB : "Bi"nary "L"arge "Ob"ject
- Almacenar archivo Bytes de todo tipo 
 - 4 Subtipos
    1 - tinyBlog - 256 bytes
    2 - mediumBlog - 65.535 bytes
    3 - Blob - 16.777.215 bytes
    4 - LongBlog - 4,294

Almacenar una imagen en la bd con BLOB

1º Usar la funcion fopen

-> fopen = funcion que se usa para decirle a nuestro archivo php que archivo quiero 
almacenar en la base de datos - 
  1º parametro - ruta del archivo
  2º parametro - permiso - Si vamos a manejar formato lectura , escritura / lectura/escritura

Lo que devuelva la funcion lo almacenamos en una variable

2º Usar la funcion fread - LEER LOS BYTES DE LA IMAGEN Y LO ALMACENA UNA VARIABLE
  TRANSFORMA EL ARCHIVO EN UNA SUCESSION DE BYTES Y LO ALMACENA EN EL CAMPO BLOB
    LUEGO RESCATAR LA INFORMACION:
    1º parametro Archivo_objetivo - EL ARCHIVO ALMACENADO
    2º parametro tamano - TAMANIO DEL ARCHIVO MEDIANTE UNA FUNCION 

Contenido_bytes_archivo = fread(Archivo_objetivo,tamano)

Consulta :


-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    ?>
  </body>
</html>
