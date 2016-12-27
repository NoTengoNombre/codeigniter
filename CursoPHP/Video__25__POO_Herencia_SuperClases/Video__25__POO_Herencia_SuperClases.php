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

    class Coche {

      var $motor;
      var $color;
      var $puertas;

      function Coche() {
        $this->motor = 2600;
        $this->color = "rojo";
        $this->ruedas = 4;
      }

      function arrancar() {
        echo "<p style='color: #f00;'>Estoy Arrancando el Coche</p><br>";
      }

      function girar() {
        echo "<p style='color: #f00;'>Coche ha girado</p><br>";
      }

      function frenar() {
        echo "<p style='color: #f00;'>Coche ha frenado</p><br>";
      }

      function establecer_color($color_coche) {
        $this->color = $color_coche;
        echo "<p style='color: #f00;'>El color de este coche es : " . $this->color . '</p><br>';
      }

      function establecer_color2($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "<p style='color: #f00;'>El color de este " . $nombre_coche . " es : " . $this->color . '</p><br>';
      }

    }

//    ------------------- OTRA CLASE ----------------------
    class Camion extends Coche { // ya estamos heredando , 
//      En la clase Camion existen 
//      todos los atributos y metodos
//      de la clase Coche

      /**
       * Constructor
       */

      public function Camion() {
        $this->ruedas = 8;
        $this->color = "azul";
        $this->motor = 2600;
      }

      //  Para evitar la invocacion del metodo de la clase Coche
//    Hacemos SOBRE_ESCRITURA DEL METODO 
      /**
       * SobreEscribir : Funcion de la clase Camion 
       * 
       * @param type $color_camion
       * @param type $nombre_camion
       */
      function establece_color($color_camion, $nombre_camion) {
        $this->color = $color_camion;
        echo "<p style='color: #00f;'>El color de " . $nombre_camion . " es : " . $this->color . "</p><br>";
      }

//      Uso de la instruccion parent : llamar al metodo de la Clase PADRE

      /**
       * Lo que estoy diciendo al codigo que este metodo 
       * de la clase Camion es ejecutar todo el metodo de la clase Padre
       * 
       * Con esto conseguimos que cuando arranque el metodo 
       * Vaya leyendo las lineas de forma secuencial y vaya 
       * a ejecutar por completo el 'metodo' de la clase PADRE
       * y CUANDO EJECUTE POR COMPLETO DE LA CLASE PADRE
       * EJECUTAR LO QUE TIENE EL METODO DE LA SUBCLASE 
       */
      function arrancar() {
        parent::arrancar();
//        Ahora al metodo de la clase Camion le podemos agregar mas instrucciones 
//        propias de la clase Hija
        echo "Camion Arrancado"; // 
      }
    }
    ?>
  </body>
</html>
