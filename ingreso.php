<?php
require_once "registracion.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yabin Logistic - usuarios</title>
  </head>
  <body>
    <fieldset>
      <h3>Ingreso de usuarios</h3>
    <form class="" action="ingreso.php" method="post">
      <input type="text" name="name" value="<?php echo $name;?>" placeholder="Nombre">
      <br><br>
      <input type="text" name="mail" value="" placeholder="e-mail">
      <br><br>
      <input type="password" name="password" value="" placeholder="Contraseña">
      <br><br>
      <input type="password" name="conf_pass" value="" placeholder="Confirmación contraseña">
      <br><br>
      <input type="number" name="admin" value="" placeholder="Nivel">
      <br><br>
      <button type="submit" name="send">Enviar</button>
    </form>
  </fieldset>

    <a href="home.php">Volver</a>
  </body>
</html>
