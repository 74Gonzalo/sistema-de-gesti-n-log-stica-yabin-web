<?php
require_once 'registracion.php';

// declaración de variables
$errores = [];
$ingreso = "";

$name = "";
$mail = "";
$password = "";
$admin = "";

if ($_POST) {
  $errores = validarInformacion($informacion);
    if(count($errores) == 0){
      $data_mensaje = "Los datos fueron ingresados correctamente";
      $ingreso = $informacion;
      $name = $ingreso['name'];
      $mail = $ingreso['mail'];
      $password = password_hash($ingreso['password'],PASSWORD_DEFAULT);
      $admin = $ingreso['admin'];

    }
    }

    $dsn = 'mysql:host=localhost;dbname=logistic;charset=utf8mb4;port:3306';
    $db_user='root';
    $db_pass='';
    $db=new PDO($dsn,$db_user,$db_pass);
    $query = $db->prepare("INSERT into USER (name,mail,password,admin) VALUES('$name','$mail','$password',$admin)");
    $query->execute();





 ?>
