<!--
    @Created on : 22-dic-2016, 18:57:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Herencia en POO . SuperClases y Subclases 
                  Reutilizacion de codigo
                  No tiene herencia multiple - Usa Interfaz
HERENCIA : Abuelo
           Padre 
           Hijo
- Cadena de la herencia 
Tenemos 3 clases 
Clase 1 
Clase 2 : Va a tener las propiedades/ metodos de la Clase 1 
Clase 3 : Va a tener las propiedades/ metodos de la Clase 2

Clase 3 : Tiene todos los propiedades/metodos de las demas clases

SuperClases y SubClases

Clase 1 : SuperClase
Clase 2 : Subclase
----------------------------
Clase 2 : SuperClase
Clase 3 : Subclase

Se busca reutilizar codigo : SE BUSCA NO TENER QUE REPROGRAMAR ; AHORRAR CODIGO
Sintaxis : extends <===> heredar  

Class 1 {... }

Clase 2 extends class 1 {... }

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'Video__25__POO_Herencia_SuperClases.php';

    $mazda = new Coche();
    $pegaso = new Camion();

    echo 'El Mazda tiene ' . $mazda->ruedas . ' ruedas<br>';
    echo 'El Pegaso tiene ' . $pegaso->ruedas . ' ruedas<br>';

    $pegaso->arrancar();
//  Para evitar la invocacion del metodo de la clase Coche
//    Hacemos SOBRE_ESCRITURA DEL METODO 
    $pegaso->establece_color("Marron", "Pegado 2");
    $pegaso->establecer_color2("azul", "Pegaso de la clase Coche");
    
    $pegaso->frenar();
    $pegaso->arrancar();
    ?>
  </body>
</html>
