<?php
require_once 'db_validation.php';
require_once 'auth.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Yabin Logistic
    </title>
  </head>
  <body>
    <section class="container">
      <h1>YABIN LOGISTIC</h1>
      <form class="" action="index.php" method="post">
        <fieldset>
            <label for="">USUARIO</label><input type="text" name="name" value="" >
            <br>
            <label for="">CLAVE</label><input type="password" name="password" value="">
            <br>
            <button type="submit" name="button">Ingresar</button>
        </fieldset>
      </form>
    </section>
  </body>
</html>
