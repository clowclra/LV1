<?php

  $num=5;
  $res;
    
      for($i= 0; $i<=10 ; $i++){
        $res=$num *$i;

        echo "{$num}X{$i}={$res} <br>";
      }
       
      for($i =1; $i<=10 ; $i++){
        for($j =0;$j <=10; $j++){

            $res2=$i*$j;

            echo "{$i} X {$j}={$res} \n <br>";
        
        }

        echo "\n ";
      }



?>