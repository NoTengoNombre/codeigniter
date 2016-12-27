<!--
    @Created on : 22-dic-2016, 13:11:31
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
    if (isset($_POST["enviando"])) {
      $contra = $_POST["contra_usuario"];
      $nombre = $_POST["nombre_usuario"];
// Evaluar 2 condiciones 
      switch (true) {
        case $nombre == "juan" && $contra == "1234";
          echo "Usuario autorizado. Hola ";
          break;
        case $nombre == "maria" && $contra == "1234";
          echo "Usuario Autorizado. Hola ";
          break;
        case $nombre == "pedro" && $contra == "1234";
          echo "Usuario Autorizado. Hola ";
          break;
        case $nombre == "adm" && $contra == "1234";
          echo "Usuario Autorizado. Hola ";
          break;
//      • default - Es el "ELSE" del "If"
        default :
          echo "Usuario no Autorizado";
      }
    }

    switch (true) {
      case 1 :
        break;
      case 2 :
        break;
      case 3:
        break;
      case 4:
        break;
      default:
    }
    ?>
  </body>
</html>
