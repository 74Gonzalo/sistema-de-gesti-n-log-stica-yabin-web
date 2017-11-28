<?php
require_once 'db.php';

// obtengo la data del tractor
for ($i=0; $i < 1 ; $i++) {
foreach ($tractorData as $key => $value) {
  $truckId = $value["id"];
  $truckName = $value["name"];
  $truckTara = $value["tara"];
  $truckType = $value["type"];
}
}
// obtengo la data de la cisterna
for ($i=0; $i < 1 ; $i++) {
foreach ($cisternaData as $key => $value) {
  $tankId = $value["idtank"];
  $tankName = $value["name"];
  $tankTara = $value["tara_tank"];
  $tankType = $value["type_tank"];
}
}


function bruto($truckTara,$tankTara,$carga){
  $pesoBruto = $truckTara + $tankTara + $carga;
  return $pesoBruto;
}

$bruto = bruto($truckTara,$tankTara,$carga);

// con la siguiente función averiguo cual es el peso máximo para
// la configuración del equipo
function pesoMaximo($truckType,$tankType){

  if ($truckType=="balancin"&&$tankType=="tres_ejes") {
    $maximo = 45000;

  }
  elseif ($truckType=="balancin"&&$tankType=="dos_ejes") {
    $maximo = 45000;
  }
  else {
    $maximo = 0;
  }
  return $maximo;
}
$pesoMaximo = pesoMaximo($truckType,$tankType);

echo $pesoMaximo;

if ($bruto>$pesoMaximo) {
  header("Location:exit.php");exit;
}
else {
  $carga = "ok";
}
echo $carga;
?>
