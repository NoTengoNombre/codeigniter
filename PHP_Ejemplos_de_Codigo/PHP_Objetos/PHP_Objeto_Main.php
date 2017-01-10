<!--
    @Created on : 06-ene-2017, 17:50:38
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
    include './PHP_Objetos_Moto.php';
    include './PHP_Objetos_Coche.php';
    include './PHP_Objetos_Motor.php';


    echo '<hr>--------------<br>';
    $mimoto2 = new Moto();
    $mimoto2->acelerar($mimoto1->get_acelerar());
    $mimoto2->ver_velocidad();
    $mimoto2->arrancar();
    var_dump($mimoto2);
    echo '<hr>';
    $otro_coche = new Coche1();
    $otro_coche->acelerar(20);
    $otro_coche->get_acelerar();
    $otro_coche->ver_velocidad();
    echo '<hr>';
    $mimoto3 = new Moto();
    $mimoto3->acelerar($otro_coche->get_acelerar());
    $mimoto3->ver_velocidad();
    echo '<hr>';

    $mimotor = new Motores();
    $mimotor->set_arrancar(true);
    var_dump($mimotor);
    $otro_coche5 = new Coche1();
    var_dump($otro_coche5);

    $otro_coche5 = $mimotor;
    $otro_coche5 = $mimoto3;
    var_dump($otro_coche5);
    ?>
  </body>
</html>
