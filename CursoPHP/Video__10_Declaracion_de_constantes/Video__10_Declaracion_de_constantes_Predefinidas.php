<!--
    @Created on : 19-dic-2016, 20:30:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/language.constants.predefined.php
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
    </title>
    <style>
      p{
        color: #f00;
      }
    </style>
  </head>
  <body>
    <p>Las Constantes se declaran con define</p>
    <p>Las Constantes van en Mayuscula </p>
    <p>No llevan Dollar $</p>
    <p>Obligatorio el uso de la funcion define() para definir constantes</p>
    <p>El ambito de las constantes es global</p>
    <p>Las constantes no se pueden redefinir</p>
    <p>Las constantes solo pueden almacenar valores escalares </p>
    <p>Valores Escalares = "NO SE PUEDE DIVIDIR EN VALORES MAS PEQUEÑOS - String , Boolean , Int ,  </p>
    <p>Array "NO ES UN VALOR ESCALAR - NO PUEDE SER UNA CONSTANTE - no permite define()  </p>
    <?php
    define("AUTOR", "MARIA", true);

    echo "La linea de esta instruccion es : " . __LINE__;
    echo '<br>';
    echo "<b>Estamos trabajando con este fichero " . __FILE__ . '</b>';
    ?>
  </body>
</html>
