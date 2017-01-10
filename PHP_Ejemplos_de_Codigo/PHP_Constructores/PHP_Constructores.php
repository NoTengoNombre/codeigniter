<!--
    @Created on : 06-ene-2017, 20:19:37
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php

    class Jugador {

      private $nombre;
      private $equipo;

      function __construct() {
//        obtengo un array con los parametros enviados a la funcion
        $params = func_get_args();
//        saco el numero de parametros que estoy recibiendo
        $num_params = func_num_args();
//        cada constructor de 1 numero dado de parametros tendra el nobmre de la funcion
//        atendiendo si hay un constructor con ese numero de parametros
        $funcion_contructor = '__construct' . $num_params;

        if (method_exists($this, $funcion_contructor)) {
//          si existe esa funcion la invoco , reenviando los parametros que recibi al constructor original
          call_user_func_array(array($this, $funcion_contructor), $params);
        }
      }

//      ahora declaro una serie de constructores que aceptan diversos numeros de parametros
      function __construct0() {
        $this->__construct1("Anonimo");
      }

      function __construct1($nombre) {
        $this->__construct2($nombre, "Sin equipo");
      }

      function __construct2($nombre, $equipo) {
        $this->nombre = $nombre;
        $this->equipo = $equipo;
      }

    }
    ?>
  </body>
</html>
