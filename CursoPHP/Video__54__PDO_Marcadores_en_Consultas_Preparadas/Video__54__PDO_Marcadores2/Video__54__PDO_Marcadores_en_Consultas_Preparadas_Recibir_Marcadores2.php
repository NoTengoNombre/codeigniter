<!--
    @Created on : 25-dic-2016, 11:08:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Marcadores de una consulta preparadas
                  Uso de arrays asociativos en consultas preparadas
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    cuadro de texto seccion del formulario
    $busqueda_sec = $_GET["seccion"];
    $busqueda_porig = $_GET["p_orig"];
    try {
      $base = new PDO("mysql:host=localhost;dbname=x_pruebas", "root", "");
//    Le estamos diciendo como propiedades esta excepciones - ATRIBUTOS
//      crear estos objetos en caso de error de tipo EXCEPCIOn
//       lo cual hace que podamos rescatar los erroes , si se produce podemos verlo y hacerlo
//        Si comento esta linea , no se crea el objeto error
//      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base->exec("SET CHARACTER SET utf8");
//      MARCADOR siempre sera : 
      $sql = "SELECT C , B , D , G FROM productos WHERE B= :secc AND  G= :porig;";
      $resultado = $base->prepare($sql);
//      cambiamos el valor del formulario : nos busque el marcador
//       posicion del array asociativo depende del valor busqueda
      $resultado->execute(array(":secc" => $busqueda_sec, ":porig" => $busqueda_porig));
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo
        " <hr>Nombre Articulo: " . $registro["C"]
        . "<br> Seccion : " . $registro["B"]
        . "<br> Precio : " . $registro["D"]
        . "<br> Pais de Origien : " . $registro["G"]
        . "<br><hr>";
      }
      $resultado->closeCursor();
//      Clase Exception -> Objeto $ex
    } catch (Exception $ex) {
//       Accedemos el objeto->metodo
      die("<b>Error: " . $ex->getMessage());
    } finally {
      $base = null;
    }
    ?>
  </body>
</html>
