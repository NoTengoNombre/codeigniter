<!--
    @Created on : 26-dic-2016, 20:35:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Cookie -> La genera el SERVIDOR , se guarda en tu ordenador

2º PODER GUARDAR LA COOKIE despues de cerrar el navegador
    para poderla abrir en el futuro y guarde informacion
    Esto nos ayuda a crear contadores de visita , de navegacion
      GUARDAR PARAMETROS COMO USUARIOS Y HABITOS DE NAVEGACION 
       Todo esto se hace mediante 3º parametro que es la duracion de la cookie
        en segundos

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>  
    <?php
// 1º   Crear una cookie
//     Cuando el navegador cargue esta pagina , navegador lee de arriba a abajo
//      cuando encuentre esta linea crea la cookie y se almacena
//    Cookie es : 
//              CLAVE : VALOR
//                           3º parametro ' Tiempo de vida de la cookie en sg'
//    La cookie se crea en el reloj del sistema , toma los segundos cuando se abre la ventana
//     Tiempo de la ventana + 30 segundos de vigencia de la cookie_________sg
    setcookie("prueba", "Esta es la informacion de la 1º cookie", time() + 30);
    ?>
  </body>
</html>
