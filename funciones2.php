<?php


$x = $_POST;
// var_dump($x);




function taraEquipo(){

$datos =$_POST;
$data = $datos;
$info = [];


// $data = $datos;
if (empty($_POST)) {
  $data['tara_tractor'] = "0";
  $data['tara_cisterna'] = "0";
  $data['tipo_tractor'] ="";
  $data['tipo_cisterna']="";
}

$taraTractor = $data['tara_tractor'];
$taraCisterna = $data['tara_cisterna'];


$taraEquipo = $taraTractor + $taraCisterna;
return  $taraEquipo;
}
$resultado = taraEquipo();
// echo($resultado);

function maximos($x){


  if (empty($x)) {
    $x['tara_tractor'] = "0";
    $x['tara_cisterna'] = "0";
    $x['tipo_tractor'] ="";
    $x['tipo_cisterna']="";
  }
  $d_tractor = $x['tipo_tractor'];
  $d_cisterna = $x['tipo_cisterna'];

  switch ($x) {
    case '45000':
      $d_tractor = $x['tipo_tractor'];
      $d_cisterna = $x['tipo_cisterna'];
      if ($d_tractor=="balancin"&&$d_cisterna=="balancin") {
        $maximo=45000;
      }
      break;
    //
    // default:
    //   # code...
    //   break;
  }
return $maximo;

switch (variable) {
  case 'value':
    # code...
    break;

  default:
    # code...
    break;
}
// return $d_tractor."+".$d_cisterna;
}

$maximos = maximos($x);


// switch (variable) tipo{
//   case '45000_A':
// if  {
//   $
// }    break;
//
//   default:
//     # code...
//     break;
//
// echo "<br>";
echo "<br>";


function pesoBruto ($resultado){
  $bruto = $resultado+30;
  return $bruto;
}
$total = pesoBruto($resultado);

// echo($total);


 ?>
