<!--
    @Created on : 15-dic-2016, 10:09:56
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : (controlador)
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include("InterfazUsuario.php");
    include("DBAccess.php");
    session_start();


    // ---- Creamos y levantamos el objeto controlador, o lo recuperamos de $_SESSION si ya fue creado -----
    if (!isset($_SESSION["CONTROLADOR"])) {    // Primera ejecución. Vamos a instanciar el controlador.
      $controlador = new Controlador();
      $_SESSION["CONTROLADOR"] = $controlador;
    } else {                    // El controlador ya fue creado. Lo recuperamos.
      $controlador = $_SESSION["CONTROLADOR"];
    }

    // Lanzamos el método principal del controlador
    $controlador->main();

    // ------------------------------------------- Controlador ----------------------------------------------

    class Controlador {

      private $ui;        // Interfaz de usuario (vista)
      private $dbaccess;    // Modelo - Capa de acceso a datos

      // Constructor. Instancia la vista y la capa de acceso a datos.

      public function __construct() {
        $this->ui = new InterfazUsuario();
        $this->dbaccess = new DBAccess();
      }

      // Función principal de control de la ejecución del programa
      public function main() {
        if (!isset($_REQUEST["size"])) {
          // Muestra el formulario inicial
          $this->ui->formInicial();
        } else {
          // Lanza la ejecución de abulafia.
          // Pedimos a la BD que recupere una secuencia aleatoria de "size" frases
          $secuencia = $this->dbaccess->getSecuencia($_REQUEST["size"]);
          // Mostramos la secuencia
          $this->ui->mostrar($secuencia);
        }
      }

// main()
    }

    // Class Controlador
    ?>
  </body>
</html>
