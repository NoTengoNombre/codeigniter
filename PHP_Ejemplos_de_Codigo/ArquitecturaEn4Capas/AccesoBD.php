<!--
    @Created on : 15-dic-2016, 10:10:47
    @Author     : RVS - N.F.N.D - Home
    @Pag        : 
    @version    :
    @TODO       : (modelo - capa de abstracción de datos)
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include './AbstraccionBD.php';

    class DBAccess {

      private $abstraccionDB;

      // Constructor. Inicializa la semilla para los aleatorios e instancia DBAbstraccion.
      public function __construct() {
        $this->abstraccionDB = new DBAbstraccion();
        srand(time());
      }

      // Devuelve una secuencia aleatoria de $size frases
      public function getSecuencia($size) {
        $this->abstraccionDB->conectarDB('localhost', 'root', '', 'abulafia');
        /* Haremos cuatro tipos de construcciones ("SUS" = sustantivo, "ADJ" = adjetivo, etc):
          - Tipo 1: ART.SUS.VER
          - Tipo 2: ART.SUS.ADJ.VER.SUS
          - Tipo 3: ART.SUS.VER.SUS.ADJ
          - Tipo 4: Tipo 2.CON.Tipo 3
          Los tres tipos aparecerán aleatoriamente en la secuencia */

        $sec = "";
        for ($i = 1; $i <= $size; $i++) {
          $tipo = rand(1, 4);
          switch ($tipo) {
            case 1:
              $sec = $sec . $this->getPalabra("ART");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("VER");
              break;
            case 2:
              $sec = $sec . " " . $this->getPalabra("ART");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("ADJ");
              $sec = $sec . " " . $this->getPalabra("VER");
              $sec = $sec . " " . $this->getPalabra("SUS");
              break;
            case 3:
              $sec = $sec . " " . $this->getPalabra("ART");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("VER");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("ADJ");
              break;
            case 4:
              $sec = $sec . " " . $this->getPalabra("ART");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("ADJ");
              $sec = $sec . " " . $this->getPalabra("VER");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("CON");
              $sec = $sec . " " . $this->getPalabra("ART");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("VER");
              $sec = $sec . " " . $this->getPalabra("SUS");
              $sec = $sec . " " . $this->getPalabra("ADJ");
              break;
          } // switch
          $sec = $sec . ". ";
        } // for

        $this->abstraccionDB->desconectarDB();

        return $sec;
      }

      // Selecciona al azar una palabra de la BD del tipo indicado (SUS, ADJ, VER, etc.)
      private function getPalabra($tipo) {
        // Averiguamos el número de palabras que existen en la BD del tipo indicado para poder seleccionar aleatoriamente
        $res = $this->abstraccionDB->ejecutaQuery("SELECT COUNT(*) FROM palabras WHERE tipo = '$tipo'");
        $fila = $this->abstraccionDB->fetchCursor($res);
        $numPalabras = (int) $fila[0];
        // Seleccionamos aleatoriamente una de las palabras del tipo indicado
        $n = rand(1, $numPalabras);
        $res = $this->abstraccionDB->ejecutaQuery("SELECT palabra FROM palabras WHERE tipo = '$tipo'");
        for ($i = 0; $i < $n; $i++) {
          $fila = $this->abstraccionDB->fetchCursor($res);
        }
        return $fila[0];
      }

    }
    ?>
  </body>
</html>
