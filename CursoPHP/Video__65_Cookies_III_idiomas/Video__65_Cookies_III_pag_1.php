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
        width: 25%;
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
    <!--Archivo PHP que comprueba si esta creada o no la COOKIE -->
    <?php
    if (isset($_COOKIE["idioma_seleccionado"])) {
      if ($_COOKIE["idioma_seleccionado"] == "es") {
        header("Location:Video__65_Cookies_III_spanish.php");
      } else if ($_COOKIE["idioma_seleccionado"] == "en") {
        header("Location:Video__65_Cookies_III_english.php");
      }
    }
    ?>
    <table>
      <tr>
        <td colspan = "2" align = "center"><h1>Elige el Idioma</h1></td>
      </tr>
      <tr>
        <!--Cuando pulso este enlace enviar el parametro ?idioma = es a la otra pagina-->
        <td align = "center">
          <a href = "Video__65_Cookies_III_CreaCookie.php?idioma=es">
            <img src = "http://as01.epimg.net/img/comunes/fotos/fichas/paises/svg/esp.svg" alt = "espania" width = "100" height = "80">
          </a>
        </td>
        <td align = "center">
          <a href = "Video__65_Cookies_III_CreaCookie.php?idioma=en">
            <img src = "http://www.inglaterra.ws/wp-content/uploads/2010/07/Bandera-del-Reino-Unido-300x194.png" alt = "ingles" width = "100" height = "80">
          </a>
        </td>
      </tr>
    </table>
    <p>&nbsp;
    </p>
    <p>&nbsp;
    </p>
    <?php ?>
  </body>
</html>
