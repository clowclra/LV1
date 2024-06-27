<?php
   function calcularImc($peso,$altura){
    $imc=$peso/(pow($altura,2));
    return $imc;
   }

   function situacao($imc){
      if($imc< 16){

        echo "O imc é:{$imc},Baixo Peso";

      }else if($imc >= 16 && $imc<= 25){

        echo "O imc e:{$imc}Saúdavel";

      }else if($imc > 25 && $imc < 29){

        echo "O imc e:{$imc}Sobrepeso";
      }else{

        echo "O imc e:{$imc},Obeso";
      }




   }

   //debugar
   $peso=$_GET['peso'];
   $altura=$_GET['altura'];

   $imc= calcularImc($peso,$altura);
   situacao($imc);








?>