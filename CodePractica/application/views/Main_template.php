<title>Main Template</title>
<body>
  <h1 style="color: #6666ff">Plantilla principal de la aplicacion</h1>
  <?php
  echo '<h1> Valor pasado por el controlador </h1>';
  include ("header.php");
  include ($pagina . ".php");
  include ("footer.php");
  ?>
</body> 