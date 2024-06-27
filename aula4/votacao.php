<?php 
//condicionais aninhadas
$idade = 1;

if(($idade >= 16 && $idade < 18) || $idade >= 70){
    echo"Voto facultativo";
}else
if($idade >=18 && $idade < 70) {
    echo "Voto obrigatorio";}
    else{
        echo "Não pode votar";
    }



?>