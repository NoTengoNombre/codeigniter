<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
     <?php
//     Traigo todo el codigo de la clase peliculas
//       eso 'incluye' el objeto creado 
//           en la otra clase llamado '$a'
     include './peliculas.php';
     include './personas.php';
     include './actuan.php';
     include './usuarios.php';
//     Si no esta creado el objeto de la clase peliculas se crea y se 
//       comprueba con el iseet
//• Si no esta creado el objeto $a
     if (!isset($pe)) {
//• Se crea el objeto de la clase peliculas
      $pe = new peliculas();
     }

//     Respuesta que se recibe de la clase peliculas.php 
//      mediante el atributo name='insertar_p' del boton de crear_formulario 
//     de la clase 'index.php' que se recibe mediante variable $_REQUEST 
     if (isset($_REQUEST['insertar_p'])) {
// • Recoge los valores recibidos desde el formulario de la clase 'peliculas.php' 
      $pe->cod_pelicula = $_REQUEST['cod_pelicula'];
      $pe->titulo = $_REQUEST['titulo'];
      $pe->genero = $_REQUEST['genero'];
      $pe->pais = $_REQUEST['pais'];
      $pe->anio = $_REQUEST['anio'];
// • ejecuta el metodo de inserccion de datos en la base de datos    
      $pe->aniade_pelicula();
     } else {
      $pe->crear_formulario();
     }
     ?>

























   </body>
</html>
