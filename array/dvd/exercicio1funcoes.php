<?php 
     function triangolo($x,$y,$z){
        if(($x+$y > $z)&& ($x+$z>$y)&& ($x+$y>$z)){
            
        }if($x== $y && $y == $z){

            echo "Equilatero";


        }else if($x==$y || $x==$z || $y==$z){

            echo "isosceles";

        }else{
            echo "Não é triangulo";
        }
     }
    $x=20;
    $y=20;
    $z=30;

    triangolo($x,$y,$z);






?>