<!--
    @Created on : 30-dic-2016, 20:42:51
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    tenemos que incluir todo los objetos de la clase Objeto_blog
//    OBTENER Y ESTABLECER LAS PROPIEDADES CORRESPODIENTES A ESOS OBJETOS
    include_once './Objeto_Blog.php'; ;

    class Manejo_Objetos {

//      establecer una conexion desde esta clase
//      la conexion viene desde otro archivo 
      private $conexion;

      /**
       * Cuando se instancie la clase se creara un objeto
       * que establecera una conexion
       *  
       * @param type $conexion
       */
      public function Manejo_Objetos($conexion) {
        $this->setConexion($conexion);
      }

      /**
       * Con este metodo establecemos la conexion
       * 
       * @param PDO $conexion
       */
      public function setConexion(PDO $conexion) {
        $this->conexion = $conexion;
      }

//      Crear los metodos necesarios para obtener la informacion
//      almacenada en bd y hacer insercciones

      /**
       * 9º metodo que almacena la informacion que hay dentro de una BD
       * 
       * Almacenar las entradas de blog en un array
       * 
       */
      public function getContenidoPorFecha() {
//        Vamos a hacer una array para 
        $matriz = array();
//        creo o establezco una variable para pasar de 
//        registro a registro dentro de la matriz
//        si hay 10 entradas de blog , se almacenaran en el array
//        para ir de la entrada 1 a la 2 , 3 USO la variable
//        contador del ARRAY 
        $contador = 0;
//        entradas de blog por fechas
//1º ESTA CONSULTA DEVUELVE UN RESULTSET en MEMORIA - esta almacenado en REGISTRO
        $resultado = $this->conexion->query("SELECT * FROM contenido ORDER BY fecha DESC");
//        Recorrer el ResultSet que tiene almacenado $resultado
//2º WHILE - Lo que hace es RECORRER ese RESULTSET registro a registro
        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) { // 2º Primera vuelta de bucle - Crea el objeto
//          instancia del objeto BLOG
          $blog = new Objeto_Blog(); // 3º En este objeto tenemos almacenadas una serie de propiedades/metodos
//           llamamos a los metodos de la clase Objeto_Blog
//           para hacer una "Entrada de blog"
//          con cada "registro" que nos "ha devuelto" el RESULTSET
//          y que tenemos almacenados en la variable OBJETO "registro"
//          y despues ir almacenarlo cada OBJETO blog 
//          en el array que hemos creado llamado $matriz
//          --------------------------------------------------------------------
//          Llama al metodo setId del objeto $blog y le asignamos el Id que devuelve el $registro que consulta de la base de datos
//             ------ Id almacenado en el OBJETO $registro
//4º usamos los metodos para introducir dentro del objeto
//4º la propiedad Id que esta en el registro que estoy evaluando
//4º en la 1º vuelta de bucle
//5º Aqui tengo el primer objeto creado con todos sus valores a la 1º vuelta de BUCLE          
          $blog->setId($registro["Id"]);
          $blog->setTitulo($registro["Titulo"]);
          $blog->setFecha($registro["Fecha"]);
          $blog->setComentario($registro["Comentarios"]);
          $blog->setImagen($registro["Imagen"]);
//6º          almacenar dentro del array 1º objeto creado
//6º         quiero almacenar este objeto en la 1º posicion del array
//6º        la 1º posicion me la marca la variable contador que vale 0 
//7º       matriz de 0 = almacena un objeto con todos los metodos y propiedades establecido   
//7º          dentro de la 1º posicion
//7º      $matriz[posicion = 0 ] = Objeto CARGADO $blog
          $matriz[$contador] = $blog;
//8º          Incrementamos la variable contador
//          Para que a la siguiente vuelta del registro almacene en la siguiente posicion otro objeto
          $contador++;
        }
        return $matriz;
      }

//     

      /**
       *  Metodo para insertar/introducir los valores en la base de datos
       *  metodo inserta contenido dentro de la bd
       * 
       * insertar objetos blog " CONTENIDOS DE BLOG dentro de la bd "
       * 
       * @param Objeto_Blog $blog ESTA VARIABLE ES DE TIPO OBJETO
       * 
       * SOY UN OBJETO DE TIPO Objeto_Blog 
       * Cuando vaya a pasarle contenido , le tengo que pasar un objeto de tipo BLOG
       */
      public function insertaContenido(Objeto_Blog $blog) {
//  instruccion para insertar valores en la bd
//        Id no lo pongo porque es autonumerico
//         Este metodo tiene que recibir por parametro un objeto de tipo BLOG
//        Para insertar la fecha tengo que llamar al metodo getTitulo del objeto Blog
        $sql = "INSERT INTO contenido (Titulo,Fecha,Comentario,Imagen) VALUES ('" . $blog->getTitulo() . "','" . $blog->getFecha() . "','" . $blog->getComentario() . "','" . $blog->getImagen() . "')";
        $this->conexion->exec($sql);
      }

    }
    ?>
  </body>
</html>
