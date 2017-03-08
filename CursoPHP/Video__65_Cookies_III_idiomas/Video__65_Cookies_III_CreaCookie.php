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
// RESCATAR LA VARIBLE IDIOMA DeL FORMULARIO DESDE la BARRA DEL NAVEGADOR  
//    Lo que venga con el parametro idioma 'es'
//    Lo que venga con el parametro idioma 'en'
//    Dentro de una cookie lo que viene con su valor 'es' o 'en' y el tiempo de duracion
//    setcookie("idioma_seleccionado", $_GET["idioma"], time() + 86400);
    setcookie("idioma_seleccionado", $_GET["idioma"], time() + 86400);
// Redirigir a otra pagina
    header("Location:Video__65_Cookies_III_Ver_Cookie.php");
    ?>
  </body>
</html>
