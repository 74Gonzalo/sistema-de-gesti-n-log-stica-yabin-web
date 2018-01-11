<?php
require_once "registracion.php";
require 'db_users.php';
if (empty($informacion)||count($errores)>0) {
    $data_mensaje = "";
}
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
      <?php
        if (!empty($errores)) {
          echo $errores['name'];
        }

         ?>

      <br><br>
      <input type="text" name="mail" value="" placeholder="e-mail">
      <?php
        if (!empty($errores)) {
          echo $errores['mail'];
        }

         ?>
      <br><br>
      <input type="password" name="password" value="" placeholder="Contraseña">
      <?php
        if (!empty($errores)) {
          echo $errores['pass'];
        }

        ?>

      <br><br>
      <input type="password" name="conf_pass" value="" placeholder="Confirmación contraseña">
      <?php
        if (!empty($errores)) {
          echo $errores['conf_pass'];
        }

        ?>

      <br><br>
      <input type="number" name="admin" value="" placeholder="Nivel">
      <br><br>
      <button type="submit" name="send">Enviar</button>
    </form>
  </fieldset>

    <?=$data_mensaje?>

    <a href="home.php">Volver</a>
  </body>
</html>
