<!--
    @Created on : 19-dic-2016, 20:30:06
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
//          Nombre   Valor
    define("AUTOR", "Juan");

    echo '<hr>';
    echo AUTOR;

    echo "El autor es : AUTOR"; // lo trata como texto
//    Sacar el valor String de la Constante
    echo '<br>';

    echo "El autor es " . AUTOR;

    echo '<hr>';
// Para que me permita poner la variable en minuscula cuando la invoco
//    Poner a 'true' el 3 parametro
    define("AUTORA", "<b>Maria</b>", true);
//    define("AUTORA", "<b>Maria</b>"); //NO PERMITE ReDefinicion

    echo "El autor es " . autora;

//    Asi si se permite la redifinicion
    define("NOMBRE", "Ana", true);
    define("NOMBRE", "Pepa");

    echo '<hr>';
    echo NOMBRE;
    ?>
  </body>
</html>
