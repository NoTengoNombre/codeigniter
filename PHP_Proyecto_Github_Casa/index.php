<?php

//El index llama a la clase Controlador y ejecuta el metodo static 'control'
//Este metodo comprueba si esta definida la variable 'do' que en un caso 
//vendria del formulario de logueo , como no lo esta , fuera la entrada
//por medio de una variable y lanza el logueo por 1º vez.
include_once "Controlador.php";
// Ejecuta la clase Controlador para ver si esta logueado el usuario
Controlador::control();
  