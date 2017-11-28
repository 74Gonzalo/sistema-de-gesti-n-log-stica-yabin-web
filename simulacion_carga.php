<?php
require_once 'funciones.php';
require_once 'db.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>YABIN LOGISTIC</title>
  </head>
  <body>
    <section class="container">
      <form class="" action="orden_carga.php" method="post">
        <input type="text" name="truck" placeholder="TRACTOR" value="" required>
        <br>
        <input type="text" name="tank" value=""placeholder="CISTERNA" required>
        <br>
        <input type="number" name="charge" value=""placeholder="CARGA"required>
        <br>
        <button type="submit" name="button">ENVIAR</button>
      </form>
  </section>
<a href="home.php">Volver</a>
  </body>
</html>
