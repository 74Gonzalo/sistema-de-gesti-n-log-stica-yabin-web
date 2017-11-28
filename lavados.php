<?php
require_once 'db.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>YABIN logistic - Lavados</title>
   </head>
   <body>
     <section class="container">
       <fieldset>
         <h2>Compatibilidad de productos</h2>
         <form class="" action="lavados.php" method="post">
           <input type="text" name="comming_product" value="" placeholder="PRODUCTO ACTUAL">
           <br>
           <input type="text" name="next_product" value="" placeholder="PROXIMO PRODUCTO">
           <br>
           <button type="submit" name="button">ENVIAR</button>
         </form>
       </fieldset>
     </section>
     <a href="home.php">Volver</a>
   </body>
 </html>
<?php
echo "<br>";
echo "la condición es: ".$lavado;
var_dump($lavado);
?>
