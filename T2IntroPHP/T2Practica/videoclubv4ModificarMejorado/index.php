<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:

                  *Películas (cod_película, título, género, país, año)
                  *Personas (cod_persona, nombre, apellidos, país)
                  *Actúan (cod_película#, cod_persona#)
                  *Usuarios (id, user, pass)

                  *En la tabla Actúan, las claves primarias son también claves ajenas.
                  
                  *Después escribe un programa en PHP para mantener la tabla Personas. 

                  El programa debe permitir:

                  *Añadir nuevos registros, introduciendo todos los campos de la tabla.

                  Eliminar registros existentes, introduciendo el código de la película.

                  Modificar los registros existentes, mostrando antes la información que haya en la BD.

                  También debe ser posible hacer un mantenimiento de la tabla Películas 
                  (Añadir, eliminar y modificar), pero ten cuidado, porque en este caso 
                  hay que enlazarla con la tabla Actúan para especificar los actores que trabajan en la película.

                  Escribe también el código PHP necesario para buscar una película 
                  cualquiera introduciendo su título, su género, el país o el nombre de cualquiera de sus actores.

                  El acceso a la aplicación tiene que estar controlado mediante 
                  una pantalla de login que solo permita acceder al programa a los usuarios registrados.
-->
<?php
include './peliculas.php';
include './personas.php';
include './actuan.php';
include './usuarios.php';

if (!isset($_REQUEST["do"]))
  $accion = "mostrarformulariologin";
else
  $accion = $_REQUEST["do"];

switch ($accion) {
  case "mostrarformulariologin":
    $login = new Login();
    $login->showForm();
    break;
  case "checklogin":
    $login = new Login();
    $login->checkLogin();
    break;
  case "anadirpelicula":
    echo "Estoy en añadir pelicula";
//			$pelicula = new Pelicula();
//			$pelicula->addPelicula();
//			break;
}
?>	