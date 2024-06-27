<?php
  //definição da função(procedimento)
  function soma($n1,$n2){
      
    $res=$n1+$n2;
    echo "\n Soma: {$res}";


  }
    //definição de função
     function sub($num1,$num2){
        $res=$num1-$num2;
        return $res;
     }
        function calcular($n1,$n2){
            echo "...O resultado da soma:";
            soma($n1,$n2);
            $resSub=sub($n1,$n2);
            echo "\n Subtração: {$resSub}";
        }







    //chamada da função/invocação
    soma(1,1);

    soma(2,2);

    $retornoFuncao=sub(5,2);

    echo "\n retorno:{$retornoFuncao}";
    calcular(10,4);
