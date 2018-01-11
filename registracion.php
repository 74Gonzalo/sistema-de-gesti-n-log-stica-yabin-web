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
        $errores['name'] = "Ingresá un nombre válido, 6 caracteres como mínimo";
      }
    $mail = (trim($informacion['mail']));
      if(!filter_var($mail,FILTER_VALIDATE_EMAIL)&&strlen($mail<6)){
        $errores['mail'] = "Ingresá un mail válido";
      }

    $pass = (trim($informacion['password']));
        if (strlen($pass)<6||strlen($pass)>12) {
         $errores['pass'] = "Ingresá una clave entre 6 y 12 caracteres";
        }
    $conf_pass = (trim($informacion['conf_pass']));
        if (strlen($conf_pass)==0||$conf_pass!==$pass) {
          $errores['conf_pass'] = "Ambas claves deben ser iguales";
        }


  return $errores;
}

 ?>
