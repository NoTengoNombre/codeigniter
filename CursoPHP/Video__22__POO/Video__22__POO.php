<!--
    @Created on : 22-dic-2016, 17:33:38
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Concepto de Programacion Orientada a Objetos (POO)
                  Creacion de clases (Objetos) en PhP
                  Concepto y creacion de instancias de clase
- Trasladar el concepto y comportamiento de los objetos de la vida real
al codigo de programacion
- El objetivo es la '"Reutilizacion"' de codigo y hacer mas facil la programacion
'"Reutilizacion"' - como la funciones pero de forma mas complejo'

Objeto: Coche
  Tiene propiedads ( atributos ) - Que tiene 
  - Color
  - Peso 
  - Alto
  - Largo

  Tiene un comportamiento ( metodos ) - Que puede hacer
  - Arrancar
  - Frenar
  - Girar
  - Acelerar

- Todos los objetos de tipo 'Coche' tiene unas caracteristicas estandar 

- INSTANCIA : Ejemplar / Ejemplarizacion de una clase 

- Clase para constuir 'Coches' que tendras una caracteristicas comunes.
  - 1 motor 
  - 4 ruedas
  - 1 color 

- Luego los coches que tenemos en la calle son diferentes , cada coche tiene una
forma , un motor diferente , diferentes ruedas , luego elementos diferenciadores
entre ellos , eso son los "ESTANCIAS,EJEMPLARES de la clase 'coche'

-1º Crear la clase Coche y luego INSTANCIAS objetos de la clase Coche



Objeto : Mesa
Tiene propiedades ( atributos)
 - Color
  - Peso 
  - Alto
  - Largo

Tiene comportamientos ( metodos)
  - Sostener_objetos

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

//    1º Crear una clase 
    class Coche {
//      Crear instancia de la clase Coche
    }

    $renault = new Coche(); //asignamos a la instancia un nombre
    $mazda = new Coche(); // instancia de la clase Coche
    $seat = new Coche(); // instancia de la clase Coche
    // fin de la clase 
//    2º Instanciar una clase
    ?>
  </body>
</html>
