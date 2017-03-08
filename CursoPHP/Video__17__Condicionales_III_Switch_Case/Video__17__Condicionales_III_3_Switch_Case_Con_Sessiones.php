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
      $contra = $_POST["contra_usuario"];
      $nombre = $_POST["nombre_usuario"];
// Evaluar 2 condiciones 
      switch (true) {
        case $nombre == $_SESSION["nombre_usuario"] = $nombre && $contra == "1234";
          echo "Usuario autorizado. Hola " . $nombre;
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
    ?>
  </body>
</html>
