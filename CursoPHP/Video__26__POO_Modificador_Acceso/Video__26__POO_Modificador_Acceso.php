<!--
    @Created on : 22-dic-2016, 20:12:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Moduralizacion : Dividir el codigo en partes ( CLASES ) que esten conectadas entre ellas
                  Encapsulacion : Solo se pueden acceder desde el propio Objeto o Clase 
                                  Solo encapsulan "atributos/propiedades" o "metodos/funciones";
                                  Solo accesible desde el propio objeto
Class Reproductor_CD
Class Radio
Class Controles_Audio
Class Ecualizador
Class Pletinas

Los objetos tiene que encapsular "poner privados" algunas funcionalidades pero
otras no para poder acceder a ellas 

Modificadores de acceso : private , protected , public

public - accesible desde cualquier parte
private - accesible desde la propia clase
protected - accesible desde la propia clase y clases heredadas

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include "Video__26__POO_Modificador_Acceso_Vehiculos.php";

//    damos un estado inicial llamando al constructor
    $mazda = new Coche();
    $pegaso = new Camion();

//    1º Puedo modificiarlo : puedo evitarlo "'encapsulando'" la propiedad ruedas
//    $mazda->ruedas = 7;  DA ERROR PORQUE ESTA PRIVADO

    echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";
    echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

//    $pegaso->frenar();
//    $pegaso->arrancar();
    
//    2º Para acceder a la propiedad privada
//       usar metodos GETTER Y SETTER 
    
    
    ?>
  </body>
</html>
