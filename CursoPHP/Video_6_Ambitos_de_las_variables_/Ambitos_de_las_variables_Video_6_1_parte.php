<!--
    @Created on : 19-dic-2016, 18:06:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        : https://www.youtube.com/watch?v=wcNXqTkISvg&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_&index=6
    @version    :
    @TODO       : Curso PHP MySQL. Ámbitos de las variables. Vídeo 6

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    • No imprime "Maria" porque php hay 2 ambitos : 
//    Ambito de la funcion y otro ambito es el ambito fuera de la funcion 
//    Son 2 archivos de codigo diferentes.
//    La variable que esta dentro de la funcion no tiene nada 
//    que ver con lo que hay dentro de la funcion.
//    • Esta variable no accede en ningun momento al contenido
//    de la variable de la funcion y viceversa
//    • Casi son 2 archivos de codigo diferentes:
//       La variable nombre de fuera no tiene nada que ver con la que esta dentro 
//       de la funcion

    $nombre = "Juan";

    function dameNombre() {
//♠   variable interna 
      $nombre = "Maria";
    }

    dameNombre();

//  ♠ variable externa 
    echo $nombre;

//    Esto se debe por el funcion 'include' y 'require'
//    permite incluir archivos externos , implica que cuando
//    incluyamos codigo , externo no sobreescriba las variables nuestras
//    con la que importemos
    ?>
  </body>
</html>
