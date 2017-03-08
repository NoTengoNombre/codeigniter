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

    class Compra_vehiculo {

      private $precio_base;
//      Esto ya no pertenece a ningun objeto a la clase Vehiculo 
//      LOS OBJETOS QUE PERTENECEN A ESTA CLASE NO VAN A TENER SU PROPIA COPIA
//      DE ESTA PROPIEDAD SINO TODOS COMPORTARIAN LA MISMA COPIA DEL ATRIBUTO
//      - Al no ser private : El valor se puede modifiar
//      - NO PERTENECE A NINGUN OBJETO de Clase : Pertenece a la CLASE
      static $ayuda = 4500;

      /**
       * Constructor
       * 
       * @param type $gama
       */
      function Compra_vehiculo($gama) {
        if ($gama == "urbano") {
          $this->precio_base = 10000;
        } else if ($gama == "compacto") {
          $this->precio_base = 20000;
        } else if ($gama == "berlina") {
          $this->precio_base = 30000;
        }
      }

      /**
       * 
       */
      function climatizador() {
        $this->precio_base += 2000;
      }

      /**
       * 
       */
      function navegador_gps() {
        $this->precio_base += 2500;
      }

      /**
       * 
       */
      function tapiceria_base($color) {
        if ($color == "blanco") {
          $this->precio_base += 3000;
        } else if ($color == "beige") {
          $this->precio_base += 3500;
        } else {
          $this->precio_base += 5000;
        }
      }

      /**
       * 
       * @return type
       */
      function precio_final() {
//        $this  = hace referencia al objeto que creamos en cada momento 
//        static $ayuda = 4500 NO PERTENECE A NINGUN OBJETO en este caso compra_Ana , compra_Antonio
//!! Para poder referenciarlo podemos usar el operador self
//        Para hacer referencia a un campo/variable 'static' usamos 'self::campo_static '
        $valor_final = $this->precio_base - self::$ayuda;
        return '<span style="color: #f00">' . $valor_final . '</span>';
      }

    }
    ?>
  </body>
</html>
