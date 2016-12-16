<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://programacion.net/articulo/como_hacer_un_footer_fijo_sin_morir_en_el_intento_1669
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
  </head>
  <style>

    h6{
      text-align: center;
      background-color: #99ff99;
      width: 210px;
      height: 50px;
    }

    body{
      background-color: #ccffcc;
    }

    p#p1{
      text-align: center;
      width: 210px;
      height: 50px;
      background-color: #65ff84;
    }

    html{
      height: 100%;
    }
    body{
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    footer{
      /* Like the header, the footer will have a static height - it shouldn't grow or shrink.  */
      /* 0 flex-grow, 0 flex-shrink, auto flex-basis */
      flex: 0 0 auto;
    }
  </style>
  <body>
    <div>
      <p id="p1">&copy; Black Metal </p>
      <h6>N.F.N.D</h6>
    </div>
  </body>
</html>
