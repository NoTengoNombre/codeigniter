<!--
    @Created on : 24-dic-2016, 16:35:09
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Curso PHP MySQL. Consultas preparadas Evitando inyección SQL. Vídeo 49.url
Pro : 
Evita inyeccion SQL
Consultas tipo INSERT + rapidas y eficientes

Inconveniente : 
Hay que escribir mas codigo , + funciones

-1º Creamos la sentencia SQL : Sustituyendo los valores de criterio por el simbolo ?
• sql="SELECT * FROM productos WHERE PAISORIGEN = ?"

-2º Preparamos : La consulta con la funcion mysqli_prepare() 
Esta funcion requiere 2 parametros : 
  - El objeto conexion y la sentencia sql
      ==> La funcion devuelve un objeto de la Clase "mysqli_stmt"
            $resultado = mysqli_prepare($conexion, $sql); 

-3º Nos devuelve un objeto de la Clase 'mysqli_stmt'

-4º Unir los parametros con la sentencia SQL
    • De esto se encarga la funcion 'mysqli_stmt_bind_param()
      Devuelve 'true' o 'false' 
    • Esta funcion requiere 3 parametros : 
       - Objeto mysqli_stmt(devuelve por mysqli_prepare)
       - El tipo de dato que se utilizara como criterio en sql , 
       - Variable con criterio

sql = "SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN = ? " 
                                                  usuario ingresa el valor mediante la funcion 
                                                  mysqli_stmt_bind_param() ==> devuelve TRUE O FALSE
                                                  = España

mysqli_stmt_bind_param() => 3 tipos de parametros.
1º Tipo de dato - String
2º Variable con la palabra que queremos buscar => "España"
------------------------------------------------------------
3º El objeto mysqli_prepare()
4º Ejecutar consulta : mysqli_stmt_execute() => devuelve TRUE o FALSE
5º mysqli_stmt_bind_result() => Nos pedira el objeto 'mysqli_stmt()';
6º Esta consulta nos devuelve un result_set - con todos los campos
7º Tenemos que asociar cada variable a cada campo que nos devuelve la consulta
    eso se hace mediante mysqli_stmt_bind_result;
8º Para ver los resultados lo hacemos con 'mysqli_stmt_fetch()'

mysqli_prepare() => 
Nos devuelve el objeto 'mysqli_stmt' 
el cual se ira ingresando en todas las funciones
que necesiten este objeto.


-->
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "x_pruebas";
?>
