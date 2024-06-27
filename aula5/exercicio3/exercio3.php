<?php
$salario = 1500;
$temposer = 5;
$reajuste = 0;

if ($salario <= 500) {
    $reajuste = ($salario + $Salario * 25 / 100);
}else if ($salario <= 1000) {
    $reajuste = ($salario + $Salario * 20 / 100);
}else if ($salario <= 1500) {
    $reajuste = ($salario + $Salario * 15 / 100);
}else  if ($salario <= 2000) {
    $reajuste = ($salario + $Salario * 10 / 100);
}else {
    $reajuste = $salario;               
}

    if($temposer >= 1 && $temposer <= 3){
       $bonus= 100;
    }else if($temposer >= 4 && $temposer <= 6){
      $bonus= 200;
    }else if($temposer >= 7 && $temposer <= 10){
      $bonus= 300;  
    }else{
      $bonus= 500;
    }

    echo"Seu salario novo e:{$reajuste}";
    echo"Seu bonus e de: {$bonus}";


            

