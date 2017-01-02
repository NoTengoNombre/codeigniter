<!--
    @Created on : 30-dic-2016, 16:39:07
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

MIME - Sistema de transferencia de archivos de forma transparente entre diferentes paises y alfabetos

bool mail( string $to -... ) ;
Si ha tenido exito TRUE - Si no hay error en el codigo ' si tiene existo - que llegue al destinatario - depende de muchos otros factores '

string $subject - asunto del correo
string $message - mensaje
string $additional_header - parametros adicionales como ccc , bcc


-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["comentarios"] == "" || $_POST["email"] == "") {
      echo "Ha habido un error , revisa los campos";
      // si llega a die() - NO CONTINUA CON LAS LINEAS DE CODIGO DE ABAJO
//       TERMINA EL SCRIPT 
      die(); // MATA EL FLUJO DE EJECUCION DEL PROGRAMA
    }


//   Aqui tengo el texto que se introdujo en el area de texot del formulario
    $texto_mail = $_POST["comentarios"];

    $destinatario = $_POST["email"];

    $asunto = $_POST["asunto"];

//    PArametro Opcional r->retorno de carro , n->salto de linea
    $headers = "MIME-Version: 1.0\r\n";

//    .= "se usa para concatenar"
//    nombre . apellido --> nombre.="apellido" 
//    - Lo que tiene la nombre MAS lo que tiene apellidos
// Concatena lo que tiene dentro con lo que tiene la otra variable
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
//  Quien envia el mensaje
//    $header .= "From: Prueba Juan < followtherules101@gmail.com >\r\n";
    $header .= "From: Prueba < u410128349@srv50.main-hosting.eu >\r\n";
//    variable que devuelve la funcion email - que sera True o False
    $exito = mail($destinatario, $asunto, $texto_mail, $headers);

    if ($exito) {
      echo "Mensaje enviado ";
    } else {
      echo "Ha habiado un error";
    }
    ?>
  </body>
</html>
