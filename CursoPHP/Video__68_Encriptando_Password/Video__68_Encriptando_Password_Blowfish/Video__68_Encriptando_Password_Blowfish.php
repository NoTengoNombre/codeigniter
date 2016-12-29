<!--
    @Created on : 28-dic-2016, 14:27:28
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.w3schools.com/php/func_string_crypt.asp
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    2 parametros , la clave y el tipo de cifrado
    $hashed_password = crypt('mypassword', null); // dejar que el salt se genera automáticamente

    var_dump($hashed_password);

    $hashed_password1 = array();

    for ($i = 0; $i < count($hashed_password1); $i++) {
      echo '<br>' . $hashed_password1[$i] = 1;
      echo '<br>';
    }
    /* Se deben pasar todos los resultados de crypt() como el salt para la comparación de una
      contraseña, para evitar problemas cuando diferentes algoritmos hash son utilizados. (Como
      se dice arriba, el hash estándar basado en DES utiliza un salt de 2
      caracteres, pero el hash basado en MD5 utiliza 12.) */
    if (hash_equals($hashed_password, crypt("mypassword", $hashed_password))) {
      echo "¡Contraseña verificada!";
    }
    ?>
  </body>
</html>
