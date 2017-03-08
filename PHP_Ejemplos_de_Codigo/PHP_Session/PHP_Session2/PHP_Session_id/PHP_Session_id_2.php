<!--
    @Created on : 21-dic-2016, 0:24:48
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : session_id() se usa para obtener o establecer el id de sesión para la sesión actual.
                  Si se especifica id, reemplazará el id de sesión actual. 
                  session_id() necesita ser llamado antes de session_start() 
                  para este propósito. Dependiendo del gestor de sesión, 
                  no todos los caracteres están permitidos dentro del id de sesión.     
                  
                  Por ejemplo, el gestor de archivo de sesión 
                  ¡sólo permite caracteres en el rango a-z A-Z 0-9 , (coma) y - (menos)!
                  session_id() devuelve el id de sesión para la sesión actual 
                  o la cadena vacía ("") si no hay sesión actual 
                  (no existe id de sesión actual).

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    echo $_SESSION["valor"];
    echo '<hr>';
    echo session_id();
    ?>
  </body>
</html>
