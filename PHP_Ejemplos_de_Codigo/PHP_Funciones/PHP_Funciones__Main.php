<!--
    @Created on : 06-ene-2017, 18:59:41
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
    include_once ('./PHP_Funciones_Casa.php');
    include_once ('./PHP_Funciones_Persona.php');

    $casa = new Casa();
    $persona = new Persona_casa();
    var_dump($casa);
    var_dump($persona);

    $hay_personas = $persona->persona_dentro_casa($casa);


    $casa_abandonada = $casa->get_habitada();
    if ($casa_abandonada == false) {
      echo "<br>La casa esta abandonada : " . $casa_abandonada;
    } else {
      echo "<br>La casa esta abandonada : " . $casa_abandonada;
    }

    echo '<hr>';
    $casa1 = new Casa();
    $casa1->__construct1("Azul", 50, $habitada = true);
    $casa1->set_habitada($casa1->get_habitada(), $persona, 5);

    echo '<br>Casa 1 : ';
    var_dump($casa);
    $persona->persona_dentro_casa($casa);
    echo '<hr>';
    echo '<br>Color : ';
    echo $color = $casa->get_color();
    echo '<br>Habitada : ';
    echo $habitada_casa = $casa->get_habitada();
    echo '<br> Tamanio : ';
    echo $tamanio = $casa->get_tamanio();
    echo '<hr>';

    echo '<br>Casa 2 : ';
    var_dump($casa1);
    $persona->persona_dentro_casa($casa1);
    echo '<br>Color : ';
    echo $color1 = $casa1->get_color();
    echo '<br>Habitada : ';
    echo $habitada_casa1 = $casa1->get_habitada();
    echo '<br> Tamanio : ';
    echo $tamanio1 = $casa1->get_tamanio();
    echo '<hr>';
    $casa1->get_habitada();
    ?>
  </body>
</html>
