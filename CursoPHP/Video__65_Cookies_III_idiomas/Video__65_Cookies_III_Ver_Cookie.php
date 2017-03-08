<!--
    @Created on : 27-dic-2016, 13:07:20
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
    <style>
      img{
        align-content: center;

      }
      table{
        text-align: center;
        border: 1px solid #f00;
        align-content: center;
      }

      h1{
        text-align: center;
      }

      p{
        font-size: 1.5em;
        color: #00f;
      }

    </style>
  </head>
  <body>
    <?php
//    Comprueba si hemos creado la cookie o si hemos pasado por la pagina de comprobacion de cookie
    if (!$_COOKIE["idioma_seleccionado"]) {
      header("Location:Video__65_Cookies_III_pag_1.php");
    } else if ($_COOKIE["idioma_seleccionado"] == "es") {
      header("Location:Video__65_Cookies_III_spanish.php");
    } else if ($_COOKIE["idioma_seleccionado"] == "en") {
      header("Location:Video__65_Cookies_III_english.php");
    }
    ?>
  </body>
</html>
