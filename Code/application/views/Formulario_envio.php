<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type='text/css' media="screen">
  label,input{
    display:block;
    padding:5px;
  }

  div.error{
    background-color: #FF8F8F;
    border: 1px solid #FF1111;
    margin-bottom: 5px;
    padding: 5px;
    width: 400px;
  }
</style>
<body>
  <?php
  ?>
  <div>
    <form action="cargar_archivo" method="post" enctype="multipart/form-data">
      <input type="file" name="mi_archivo">
    </form>
    <input type="submit" value="Submit">
  </div>
</body>