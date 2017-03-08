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
// Break : ROMPE EL FLUJO DE EJECUCION DEL PROGRAMA
    if (isset($_POST["enviando"])) {
      $nombre = $_POST["nombre_usuario"];
      $edad = $_POST["edad_usuario"];
      $contra = $_POST["contra_usuario"];
// Evaluar 2 condiciones 
      switch (true) {
        case $edad < 18 && $contra == "1234";
          echo "Usuario autorizado. Hola " . $nombre . "<br>Edad menor " . $edad;
          break;
        case ($edad > 18 && $edad < 30 ) && $contra == "1234";
          echo "Usuario Autorizado. Hola " . $nombre . "<br>Edad media " . $edad;
          break;
        case ($edad > 30 && $edad < 60 ) && $contra == "1234";
          echo "Usuario Autorizado. Hola " . $nombre . "<br>Edad mayor " . $edad;
          break;
        case ($edad > 60 && $edad < 80) && $contra == "1234";
          echo "Usuario Autorizado. Hola  " . $nombre . "<br>Edad viejo" . $edad;
          break;
//      • default - Es el "ELSE" del "If"
        default :
          echo "Usuario no Autorizado" . $nombre . "<br>Edad " . $edad;
      }
    }

//    switch (true) {
//      case 1 :
//        break;
//      case 2 :
//        break;
//      case 3:
//        break;
//      case 4:
//        break;
//      default:
//    }
    ?>
  </body>
</html>
