<!--
    @Created on : 24-nov-2016, 11:04:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<html>  
  <body>  
    <form action="upload_file.php" method="<?php filter_input(['PHP_SELF']) ?>;">  
      enctype="multipart/form-data">  
      <label for="file">Filename:</label>  
      <input type="file" name="file" id="file" />  
      <br />  
      <input type="submit" name="submit" value="Submit" />  
    </form>  
  </body>  
</html>   

<?php
echo 'Mi nombre es : ' . $_ENV['USER'] . ' ! ';
?>

<?php
echo 'Mi nombre es : ' . $_ENV['USER'] . ' ! ';
?>


