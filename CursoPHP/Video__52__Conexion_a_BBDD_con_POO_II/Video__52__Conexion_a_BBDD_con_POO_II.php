<!--
    @Created on : 24-dic-2016, 19:09:18
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : CAPA DE ABSTRACCION : 

POO - Libreria - Parecia JQuery JS

- Codigo intermedio entre PHP y PDO 

- PDO - es "POO" -> lenguaje orientado a OBJETOS.

- POO permite conectar con distintas base de datos como ORACLE , MYSQL , ACCESS 

- Excepcion es un fallo : 
Todo esta bien escrito , 
ha ocuurrido un error que no tiene
nada que ver con la sintaxis

Si se produce un fallo genera un objeto
el cual tiene propiedades y metodos
y esto genera en un try/catch

try -> intenta ejecutar el codigo
SI FALLA
catch -> captura el error y haz lo que yo te diga 

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: #011;
        color: #fff;
      }

      table{
        border: 1px solid #f00;
        background-color: #000;
        color: #fff;
      }


    </style>
  </head>
  <body>
    <?php
//intenta ejecutar el codigo
    try {
      $base = new PDO('mysql::host=localhost;dbname=x_pruebas', 'root', '');
//captura el objeto del error y haz lo que te diga
      echo "Conexion OK";
    } catch (Exception $e) {
//    mata el proceso y muestre el mensaje del error
//      cuando se ejecuta el error ejecuta el metodo
      die("Error" . $e->getMessage());
    } finally { // si no hay error ejecuta esta linea 
      $base = null;
      echo "<br>Entro";
    }
    ?>
  </body>
</html>
