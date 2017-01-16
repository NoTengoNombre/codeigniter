<!--
    @Created on : 12-ene-2017, 21:31:22
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php foreach ($cursos->result() as $curso) { ?>
  <ul>
    <li><?= $curso->nombreCurso; ?></li>
  </ul>

<?php } ?>
</body>
</html>


