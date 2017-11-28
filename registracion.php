<?php
$informacion = $_POST;
$name = "";
$mail = "";
$pass = "";
$admin = "";

function validarInformacion($informacion){
  $errores = [];
    $name = (trim($informacion['name']));
      if (strlen($name)<6) {
        $errores['name'] = "Ingresá un nombre válido";
      }
    $mail = (trim($informacion['mail']));
      if(!filter_var($mail,FILTER_VALIDATE_EMAIL)&&strlen($mail<6)){
        $errores['mail'] = "Ingresá un mail válido";
      }




  return $errores;
}
$a = validarInformacion($informacion);

var_dump($informacion);
var_dump($a);
 ?>
