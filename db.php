<?php
// var_dump($_POST);
$nombreTractor = $_POST['truck'];
$nombreCisterna =$_POST['tank'];
$carga = $_POST['charge'];
$comming_product = $_POST['comming_product'];
$next_product =$_POST['next_product'];
echo $comming_product;
echo "<br>";
echo $next_product;
echo "<br>";

// apertura de base de datos logistic
$dsn = 'mysql:host=localhost;dbname=logistic;charset=utf8mb4;port:3306';
$db_user='root';
$db_pass='';
$db=new PDO($dsn,$db_user,$db_pass);
// query de datos de tractor
$query = $db->prepare("SELECT * from truck where name = '$nombreTractor'");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$tractorData = $results;

// // query de datos de cisterna
$query = $db->prepare("SELECT * from tank where name = '$nombreCisterna'");
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$cisternaData = $results;

//query para compatibilidad de productos


$query = $db->prepare("SELECT wash_type from washing where comming_product = '$comming_product' and next_product = '$next_product'");
$query->execute();
$results=$query->fetchAll(PDO::FETCH_ASSOC);
$lavado = $results;

var_dump($lavado);
 ?>
