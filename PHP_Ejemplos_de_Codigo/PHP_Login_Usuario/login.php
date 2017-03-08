<!--
    @Created on : 15-dic-2016, 18:54:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Login</title>

    <meta charset = "utf-8">
  </head>

  <body>
    <h1>Login de Usuarios</h1>
    <form action="checklogin.php" method="post" > 
      <label>Nombre Usuario:</label><br>
      <input type="text"  name="username" id="username" required>
      <br><br>
      <label>Password:</label><br>
      <input type="password" name="password" id="password" required>
      <br><br>
      <input type="submit" name="Submit" value="LOGIN">
    </form>
    <footer>
    </footer>

  </body>
</html>