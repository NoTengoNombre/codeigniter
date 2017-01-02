<!--
    @Created on : 28-dic-2016, 17:05:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.elcodigofuente.com/hacer-una-clase-en-php-class-553/
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    Class Student {

      public $nombre; //Se puede accesar desde el Objeto
      public $notas = array(); //Se puede Accesar desde el Objeto
      private $promedio; //solo es usado dentro de la clase y no es heredable (protected si es heredable)

      public function __construct($arg_nombre = "", $arg_notas = array()) { //funcion que se autoejecuta cuando defines un objeto, le puedes poner argumentos de inicialización, por defecto todo es vacio
        $this->nombre = $arg_nombre; //ponemos el argumento pasado cuando defines el objeto
        $this->notas = $arg_notas;
      }

      public function promedio() { //funcion que calcula el promedio, lo devuelve
        $total = 0;
        foreach ($this->notas as $nota) { //Ver tema http://www.elcodigofuente.com/usar-foreach-arrays-545/
          $total += $nota; //acumulo las nota actual 
        }
        $this->promedio = $total / 4; //grabo el promedio de las 4 notas en la variable promedio, recuerde que las variables dentro de una clase se accesan con $this->
        return $this->promedio; //retornamos el promedio
      }

      public function imprimir_notas() { //imprime las notas en pantalla
        $i = 0;
        foreach ($this->notas as $nota) {
          $i++;
          echo "Nota $i es: $nota <br />";
        }
      }

    }

    $notas[0] = 5;
    $notas[1] = 5;
    $notas[2] = 5;
    $notas[3] = 5;
    $alumno = new Student("Pepe", $notas);

    echo $alumno->nombre;
    echo '<hr>';
    $alumno->notas;

    echo $alumno->imprimir_notas();
    echo '<br>';
    echo 'Nota media: ' . $alumno->promedio();
    echo '<br>';
    ?>
  </body>
</html>
