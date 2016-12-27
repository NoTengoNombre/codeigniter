<!--
    @Created on : 22-dic-2016, 17:50:15
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Objetos : tiene propiedades y funcionalidades

Propiedades y metodos de objetos
Cambio de propiedades
Llamadas a metodos

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Coche { //Objeto Coche tendra ; motor estandar , sin color , 4 pruebas
//      atributos - variables

      var $ruedas; // objetos de tipo coche tiene la propiedad $ruedas
      var $color; // propiedad del objeto de tipo coche
      var $motor;  // propiedad del objeto de tipo coche

//      Crear el estado inicial de una clase mediante un constructor

      function Coche() { // metodo constructor;
//        Estado inicial del tipo "coche" son los siguientes:
//    1º $this -> Para referirnos a la propia 'clase Coche' 
//        Es como si pusiera 'implicitamente' la clase "Coche"
//    2º Oye - estoy hablando con la CLASE 'Coche' 
//        $seat-> atributos , metodos
//        $this-> REFERENCIA a una propiedad o metodos de la clase
        $this->ruedas = 4; //coche en estado inicial tiene 4 ruedas
        $this->color = "";
        $this->motor = 1600;
//        Le hemos dados un tipo inicial al estado de coche 
      }

//      funcionalidades del tipo coche : 3 metodos
      /**
       *  metodo que define los objetos coche
       */
      function arrancar() {
        echo "Estoy arrancando<br>";
      }

      /**
       * 
       */
      function girar() {
        echo "Estoy girando<br>";
      }

      /**
       * 
       */
      function frenar() {
        echo "Estoy frenando<br>";
      }

    }

//3 Instancia/ejemplares
//  llamada al constructor / objeto inicial el que determina el constructor ; 
//   ejecuta todas las instrucciones que tiene dentro el constructor
    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    $mazda->girar(); // metodo void

    echo $mazda->ruedas; // llamada a la propiedad de la instancia
    ?>
  </body>
</html>
