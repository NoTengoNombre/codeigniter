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
--------------------------
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
  </head>
  <style>

    h1{
      text-align: center;
      color:#00f ;
    }

    h2
    {
      text-align: center;
      color:#f00;
    }

    table{
      /*height: auto;*/
      width: 55%;
      background: #FFC;
      border: 2px solid #F00;
      margin: auto;
    }

    #izq{
      font-size: 30px;
      text-align: center;
    }

    a#posicion{
      position: fixed;
      float: right;
      bottom: 450px;
    }

    td{
      border: 1px solid #f00;
      text-align: center;
      padding: 10px;
    }

    body{
      background: #000;
      color: #f00;
    }

  </style>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: Video__61__Login_Sistema_de_Login_III.php");
    }
    ?>
    <table>
      <h1 class="titulo">Bienvenido</h1>
      <?php
      echo "<h2>Hola " . $_SESSION["usuario"] . " </h2><br><br>";
      ?>
      <p id="izq">Estas en la zona de registros</p>
    </table>

    <table>
      <tr>
        <td colspan="4">Zona de Usuarios Registrados</td>
      </tr>
      <tr>
        <td><a href='Video__61__Login_Sistema_de_Login_III_Registro_1.php'>Pagina 1</a></td>
        <td><a href='Video__61__Login_Sistema_de_Login_III_Registro_2.php'>Pagina 2</a></td>
        <td><a href='Video__61__Login_Sistema_de_Login_III_Registro_3.php'>Pagina 3</a></td>
        <td><a href='Video__61__Login_Sistema_de_Login_III_Registro_4.php'>Pagina 4</a></td>
      </tr>
    </table>
    <a id="posicion" href="Video__61__Login_Sistema_de_Login_III_Cerrar_Session.php">Cierra Session</a>
  </body>
</html>
