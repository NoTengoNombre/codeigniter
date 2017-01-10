<!--
    @Created on : 26-dic-2016, 1:29:55
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Login.php -> formulario : se valida con la bd 
                  Si esta el usuario se redirige a una pagina pag1.php
                  Si no lo esta redirige a una pagina Prohibido.php
              Podemos hacer que este en un bucle repitiendo la entrada el login
-------------------------------------------------------------------------
Esto no es correcto :  Video__60__Login_Sistema_de_Login_Registro.php

Pasa de este script de logueo 
- Video__60__Login_Sistema_de_Login_I.php

A este otro -
- Video__60__Login_Sistema_de_Login_Registro.php

Si lo metes en el navegador directamente - accederias dentro de la pagina de registro.
Sin pasar por el sistema de login.
SE EVITA USANDO SESSION , CUANDO EL USUARIO TENGA EXITO , ESTE EN LA BASE DE DATOS
EL SISTEMA CREA UNA SESSION PARA ESE USUARIO.
SI EL USUARIO INTENTA CAMBIAR DE PAGINA SIN LOGUEARSE Y NO CREA EL PROGRAMA
UNA SESSION PARA ESTE USUARIO , PUES NO PODRA ACCEDER

- NECESITAMOS 2 COSAS : 

* crear una sesion : session_start() , si nunca se ha creado una session 
'se crea y se guarda durante toda la navegacion del usuario' 
si visitamos otra pagina diferente , como ya fue creada , reanuda la anterior session

- Utilizando $_GET , $_POST podemos reanudar una session o con cookie
- mediante $_GET y $_POST podemos pasarle el 'IDENTIFICADOR AL USUARIO SE HA LOGUEADO MEDIANTE GET O POST'


* utilizar supervariable global - $_SESSION[]




-->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      h1{
        text-align: center;
      }
      table{
        width: 25%;
        background: #FFC;
        border: 2px dotted #F00;
        margin: auto;
      }

      .izq{
        text-align: center;
      }

      .titulo{
        text-align: center;
      }

      td{
        text-align: center;
        padding: 10px;
      }
      body{
        background: #000;
        color: #f00;
      }
    </style>
  </head>
  <body>
    <table>
      <h1 class="titulo">Bienvenido</h1>
      <p class="izq">Estas en la zona de registros</p>
    </table>
  </body>
</html>
