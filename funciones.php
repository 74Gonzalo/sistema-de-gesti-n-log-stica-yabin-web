<?php

// para poder trabajar con los valores de $_POST, le doy los valores a una variable local para poder utilizarla en todo el programa
$x = $_POST;


// para evitar los index no definidos
if (empty($_POST)) {
  $x['tara_tractor'] = "0";
  $x['tara_cisterna'] = "0";
  $x['tipo_tractor'] ="";
  $x['tipo_cisterna']="";
  $x['carga']="0";
  $x['tara_equipo']="0";
}

function pesoBruto($x){
  $bruto = $x['tara_tractor']+$x['tara_cisterna']+$x['carga'];
  return $bruto;
}

$total = pesoBruto($x);
echo "peso bruto es= ";
var_dump(pesoBruto($x));
$total;


function maximos($x){

  $d_tractor = $x['tipo_tractor'];
  $d_cisterna = $x['tipo_cisterna'];

  if ($d_tractor =="balancin"&&$d_cisterna=="tres ejes") {
    $pesoMaximo = 45000;
  }
  elseif ($d_tractor=="simple"&&$d_cisterna=="dos ejes") {
    $pesoMaximo = 42000;
  }
  else {
    $pesoMaximo = 0;
  }
  return $pesoMaximo;
  }

  $maximo = maximos($x);

echo "ver";
var_dump($maximo);



    if ($total>$maximo){
        header("Location:exit.php");exit;
       }
 else
 {$valor = "ok";}

var_dump($valor);


 ?>
