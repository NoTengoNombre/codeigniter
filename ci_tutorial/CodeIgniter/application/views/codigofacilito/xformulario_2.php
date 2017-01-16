<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

      ::selection { background-color: #E13300; color: white; }
      ::-moz-selection { background-color: #E13300; color: white; }

      #h2id{
        background: #f00;
      }

      #h2id1{
        background: #0f0;
      }

      #footer{
        background: #00f;
      }
    </style>
  </head>
  <body>
    <h3>Bienvenido : Formulario</h3>
    <h1> Abrir formulario </h1>
    <!--La etiqueta que abre el formulario : crea el formulari de inicio  y la ruta del ACTION puede llevar mas parametros como la clase -->
    <?= form_open('codigofacilito/recibirdatos'); ?>
    <?php
//    Almacenar los valores dentro de un array
    $city = array(
        'name' => 'city',
        'placeholder' => 'Escribe la ciudad');
    $population = array('name' => 'population',
        'placeholder' => 'Total Poblacion');
    ?>
    <label>
      Nombre:
      <?php form_input($city) ?>
    </label>
    <hr>
    <label>
      Numero de registros 
      <?= form_input($population) ?>
    </label>
    <?= form_submit('','Enviar datos') ?>
    <?= form_close() ?>

    <h2> Cerrar formulario <?= form_close() ?> </h2>  

    <div id="container">
      <!--<img src="https://ugc.kn3.net/i/origin/https://i.imgur.com/BjBsINO.jpg" alt="" width="300">-->
      <p id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
      <p>Memory usage : {memory_usage} </p>
    </div>

  </body>
</html>