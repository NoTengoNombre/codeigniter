<!--
    @Created on : 22-dic-2016, 23:43:06
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Ejemplo Clase y Objetos Static
                  Dentro de una clase tenemos definidos atributos / metodos
                  

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include './Video__28__POO_Variable_y_Metodos_Estaticos_Ejemplo.php';

//Le estamos dando un estado inicial : compato = 20000;
    $compra_Antonio = new Compra_vehiculo("compacto");

    $compra_Antonio->precio_final();
    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_base("blanco");
    echo $compra_Antonio->precio_final();

    echo '<hr>';
//    Vamos a crear una 2º instancia 
    $compra_Ana = new Compra_vehiculo("compacto");
    $compra_Ana->climatizador();
    $compra_Ana->tapiceria_base("rojo");
    echo $compra_Ana->precio_final();
    // cuando crea una instancia de la clae Coche , cada instancia
//    tiene una propia copia de climatizador y tapiceria_base
//    los metodos puede comportarse de forma de diferente en el objeto Ana Y Antonio
//    cada 1 tiene su propia del metodo
//    Precio diferente porque el metodo climatizador se comporta diferente
//    para cada 1 de los objetos
//    
//    Metodo static se refiere a que el metodo solo tiene una copia para la clase
//    donde se ha declarado , todos los objetos comparten el mismo metodo static .
//    
//    El metodo static pertenece a la CLASE no al objeto , 1 copia del metodo
//    para todos los objetos de la clase
//    ---------------------------------------------------------------------------
//    Hacer descuento corresponde a 4500 € 
    echo '<hr>';
//    Hacer una llamada al valor static
    
    ?>
  </body>
</html>
