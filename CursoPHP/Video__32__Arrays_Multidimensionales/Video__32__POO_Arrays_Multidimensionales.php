<!--
    @Created on : 23-dic-2016, 11:33:36
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Un Array Multidimensionales : como las muñecas rusas 
                  Un Array Dentro de Otra
//    Array asociativo con 2 dimensiones

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    Array asociativo con 2 dimensiones
//Nombre Array
    $alimentos = array(
//       Indice   nombre asociativo
        "fruta" => array(
//    Elem asociativo    Elementos
            "tropical" => "kiwi",
            "citrico" => "mandarina",
            "otros" => "manzana"),
//       Indice   nombre asociativo
        "leche" => array(
            "animal" => "vaca",
            "vegetal" => "coco"),
//       Indice   nombre asociativo
        "carne" => array(
            "vacuno" => "lomo",
            "porcino" => "pata"));

    echo $alimentos["carne"]["vacuno"];

    echo '<hr>';

//    funcion LIST
//    crear 2 nombres : 1º dimension 2º dimension
//                      Nom 1º dim     Nom 2º dim
    foreach ($alimentos as $clave_alim => $alim) {
      echo "$clave_alim : <br>";
//      Desdoblar el array mediante While
//       necesito un nombre identificativo para 1º elemento
//      Por cada $alim lo desdoble
//      mientras haya elementos en la lista
      while (list($clave, $valor) = each($alim)) {
        echo $clave . " = " . $valor;
        echo "<br>";
      }
    }

    var_dump($alimentos);
    ?>
  </body>
</html>
