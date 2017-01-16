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
    <h1>Bienvenido Tutorial Codigo Facilito</h1>
    <header>
      <h2 id="h2id"> Ayuda - <?= getNombre() ?> </h2>
      <h2 id="h2id1"> Ayuda - <?= $mi_menu ?> </h2>
    </header>


    <div id="container">
      <img src="https://ugc.kn3.net/i/origin/https://i.imgur.com/BjBsINO.jpg" alt="" width="300">
      <p id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
      <p>Memory usage : {memory_usage} </p>
    </div>

  </body>
</html>