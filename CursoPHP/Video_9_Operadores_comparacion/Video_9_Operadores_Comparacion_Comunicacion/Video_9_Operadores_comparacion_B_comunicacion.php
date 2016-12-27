<!--
    @Created on : 19-dic-2016, 20:24:42
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
      body{
        border: 1px solid #f00;
        background-color: #000;
        color: #fff;
      }
      h1{
        text-align: center;
      }

      table{
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
        color: #000;
      }

      .no_validado{
        font-size: 18px;
        color : #F00;
        font-weight: bold;
      }

      .validado{
        font-size: 18px;
        color: #0C3;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <!--Quiero que salgan los datos introducidos en el formulario despues
    por eso lo pongo despues del formulario-->
    <!--Almacenar lo que ha introducido el usuario en el formulario
    dentro del atributo id -->
    <?php
//    isset -> comprueba si se ha pulsado el boton de enviar
    if (isset($_POST["enviando"])) {
//      $_POST -> variable SuperGLOBAL -> Es una array asociativa - POR LOS PUTOS CORCHETES LO DICE
//      Ahora tengo k controlado las 2 variables introducidas por el formulario
//      Almaceno en 2 variables los datos enviados desde el formulario con la etiqueta 'name'
      $usuario = $_POST["nombre_usuario"];
      $edad = $_POST["edad_usuario"];

//    La variable $usuario se usara para
//    Dar acceso al usuario 'Juan'
      if ($usuario == "Juan" && $edad >= 18) {
        echo "<p class='validado'>Puedes Entrar<p>";
      } else {
        echo "<p class='no_validado'>No Puedes Entrar<p>";
        echo "<p class=\"no_validado\">" . "No Puedes Entrar : edad = $edad" . "<p>";
      }
    }
    ?>
  </body>
</html>
