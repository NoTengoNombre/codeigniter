<!--
    @Created on : 22-dic-2016, 20:42:16
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : setter - modificar las propiedades de un objeto
                  getter - ver , devolver la propiedades de un objeto
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'Video__27__POO_Modificador_Acceso_Privado_II_Getter_Setter.php';

    $pegaso = new Camion();
    $mazda = new Coche();

//    metodo publico 
    echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";

    echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

    echo "El mazda tiene el motor de " . $mazda->get_motor() . " cc<br>";
    ?>
  </body>
</html>
