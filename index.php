<?php
require_once("funciones.php");

// var_dump($x);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <form class="" action="index.php" method="post">
        <label for="">CALCULO DE TARA</label>
        <br>
          <label for="">Tara tractor</label><input type="number" name="tara_tractor" value="">
          <br>
          <label for="">Tipo tractor</label><input type="text" name="tipo_tractor" value="">
          <br>
          <label for="">Tara cisterna</label><input type="number" name="tara_cisterna" value="">
          <br>
          <label for="">Tipo cisterna</label><input type="text" name="tipo_cisterna" value="">
          <br>
          <label for="">Cantidad a cargar</label><input type="number" name="carga" value="">
          <br>
          <button type="submit" name="button">Enviar</button>
          <br>
          <label for="">Peso bruto</label><input type="number" name="bruto" value="<?php echo$bruto?>">
      </form>
    </fieldset>
    <!-- <fieldset> -->
      <!-- <form class="" action="index.php" method="post">
        <label for="">CALCULO DE NETO</label>
          <label for="">Tara equipo</label><input type="number" name="tara_equipo" value="<?php echo $resultado?>">
          <label for="">Cantidad a cargar</label><input type="number" name="carga" value="">
          <label for="">Peso neto</label><input type="number" name="neto" value="">
          <button type="submit" name="button">Enviar</button>
      </form> -->
    <!-- </fieldset> -->
  </body>
</html>
