<!--
    @Created on : 30-oct-2016, 19:23:36
    @Author     : RVS - N.F.N.D
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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
      <fieldset>
        <legend>RADIO BUTTON</legend>
        <br>
        Gender : Genero
        <br>
        <input type="radio" name="gender" <?php
        if (isset($gender) && $gender == "Female") {
          echo "checked";
        }
        ?> value="Female"> Female
        <br>
        <input type="radio" name="gender" <?php
        if (isset($gender) && $gender == "Male") {
          echo "checked";
        }
        ?> value="Male"> Male
        <br>
        <br>
        <input type="submit" value="submit">
      </fieldset>
    </form>
    <?php
    if (!empty($_POST["gender"])) {
      $gender = $_POST["gender"];
      echo '<br>' . $gender;
      var_dump($gender);
      if ($gender == 'Female') {
        echo "<br>Soy una mujer";
      } elseif ($gender == 'Male') {
        echo "<br>Soy un hombre";
      }
    } else {
      echo '<br>' . $genderErr = "Gender is required";
    }
    ?>
  </body>
</html>
