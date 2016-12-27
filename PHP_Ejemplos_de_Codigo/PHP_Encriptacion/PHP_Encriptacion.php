<!--
    @Created on : 20-dic-2016, 10:39:37
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
    $submitted_pass = "abcdefghijklmnopqrstuvwxyz";

    $enc_pass1 = password_hash($submitted_pass, PASSWORD_DEFAULT);

    for ($index = 0; $index < 5; $index++) {
      $enc_pass = password_hash($submitted_pass, PASSWORD_DEFAULT);
      echo '<br>';
      echo $enc_pass;
      echo '<br>';
    }

    echo '<hr>';
    echo 'Dar acceso a la linea';
    echo '<br>';
    if (password_verify($submitted_pass, $enc_pass1)) {
      echo "Usuario accedido";
    }
    ?>
  </body>
</html>
