<!--
    @Created on : 22-dic-2016, 23:43:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Ejemplo Clase y Objetos Static
                  Dentro de una clase tenemos definidos atributos / metodos
                  

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Clase_1 {
      
    }

//   Cada copia de la clase 'instancia' tiene una copia propia del metodo
//   de la clase , los metodos de cada objeto de la clase son independientes.
//   eso quiere decir que estos metodos se comportan de forma diferente para
//   cada objeto , si tuvieramos 30 objetos cada 1 de los objetos tendria 
//   su propia copia del metodo , los metodos tendrían comportamientos diferentes.
//   Estamos llamando al constructor de la clase Clase_1
    $obj1 = new Clase_1(); // Instancia 
//   Estamos llamando al constructor de la clase Clase_2
    $obj2 = new Clase_1(); // Instancia 
    ?>
  </body>
</html>
