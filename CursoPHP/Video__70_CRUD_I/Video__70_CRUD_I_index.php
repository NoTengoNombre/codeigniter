<!--
    @Created on : 28-dic-2016, 19:16:19
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :


Create Read Update Delete -> CRUD 

- Puede usar Bootraps
- Puede usar MVC

Archivo hara : READ - CREATE

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      @charset "utf-8";
      /* CSS Document */
      h1{
        text-align:center;
      }
      .subtitulo{
        font-size:12px;
      }
      body{
        background-color:#FFC;
      }
      table td{
        text-align:center;
        border:1px #000099 dotted;
      }
      table .sin{
        border:0;
      }
      table .bot{
        padding:0 5px;
        display:inline;
        border:0;
      }
      table .primera_fila{
        font-size:1.5em;
        text-decoration:underline;
        background-color:#FC3;
      }
      .centrado{
        text-align:center;
      }
    </style>
  </head>
  <body>
    <?php
    include 'Video__70_CRUD_I_conexion.php';

//  Lo que haria seria ejecutar una consulta SQL en la tabla usuarios
//    los registros se guardan en un array de objetos
    $conexion1 = $base->query("SELECT * FROM datos_usuarios");
//    Almacenar esos objetos en un result_set
//    PDOStatement::fetchAll — Devuelve un array que contiene todas las filas del conjunto de resultados
//  $registros = ALMACENA un ARRAY DE OBJETOS
//  $registros = $conexion1->fetchAll(PDO::FETCH_OBJ); ESTO HACE LO MISMO
    $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); // ESTO HACE LO MISMO
//  Las columnas de la base de datos se convierten en PROPIEDADES/ATRIBUTOS DE LOS OBJETOS
//   id = propiedad 
//   nombre = propiedad 
//   apellidos = propiedad 
//   direccion = propiedad 
    ?>
    <h1>CRUD<span class="subtitulo"><br>Create Read Update Delete</span></h1>
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellidos</td>
        <td class="primera_fila">Direccion</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="bot">
          <input type="button" name="del" id="del" value="Borrar"></td>
        <td class="bot">
          <input type="button" name="up" id="up" value="Actualizar"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="text" name="Nom" size="10" class="centrado"></td>
        <td>
          <input type="text" name="Ape" size="10" class="centrado"></td>
        <td>
          <input type="text" name="Dir" size="10" class="centrado"></td>
        <td class="bot">
          <input type="submit" name="submit" size="cr" class="Insertar" value="Insertar">
        </td>
      </tr>
    </table>
  </body>
</html>
