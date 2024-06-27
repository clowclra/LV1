<?php

       //dados das pessoas da cidade

       $dados=[
            ['salario' => 1000,'filhos'=>2],
            ['salario' => 2000,'filhos'=>3],
            ['salario' => 3000,'filhos'=>4],
            ['salario' => 300,'filhos'=>5],
            ['salario' => 200,'filhos'=>12],
            ['salario' => 500,'filhos'=>9],
       ];
       //função
       function estatistica($dados){
            $somasalario=0;
            $somafilhos=0;
            $totalpessoas=count($dados);
            $maiorsalario= 0;
            $salariosate350=0;

            foreach($dados as $p){

                $salario=$p['salario'];
                $filhos=$p['filhos'];
                $somasalario+= $salario;
                $somafilhos+= $filhos;

                if($salario>$maiorsalario){
                    $maiorsalario=$salario;
                }
                if($salario<= 350){
                    $salariosate350++;

                }

            }
            $mediasalario=$somasalario/$totalpessoas;
            $mediadefilhos=$somafilhos/$totalpessoas;
            $porcentagemsalario350=($salariosate350/$totalpessoas)*100;
     
            echo "media do salario da população R$: ".number_format(
             $mediasalario,2)."\n";
             echo "Maior salario: R$".number_format($maiorsalario,2)."\n";
             echo "Media numero de filhos: ".$mediadefilhos."\n";
             echo "Porcentagem de pessoas com salario até R$ 350,00: ".$porcentagemsalario350. "%";

       }
      
estatistica($dados);


?>