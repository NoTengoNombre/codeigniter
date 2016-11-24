<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://programacion.net/articulo/como_hacer_un_footer_fijo_sin_morir_en_el_intento_1669
    @version    :
    @TODO       :
-->

<style>
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

<h5>Este sera el pie de mi web</h5>
<p>&copy; YoMismo 2016</p>

</body>
</html>
