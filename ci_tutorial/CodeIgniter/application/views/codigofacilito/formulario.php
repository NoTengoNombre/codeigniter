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
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe el nombre');

    $videos = array('name' => 'videos',
        'placeholder' => 'Cantidad videos del curso');
    ?>
    <hr>
    <?= form_label('Nombre: <br>', 'nombre') ?>
    <?= form_input($nombre) ?>
    <hr>
    <?= form_label('Total de Videos: <br>', 'videos') ?>
    <?= form_input($videos) ?>
    <br>
    <br>
    <?= form_submit('', 'Enviar datos') ?>
    <br>
    <?= form_close() ?>
    <br>
  </body>
</html>