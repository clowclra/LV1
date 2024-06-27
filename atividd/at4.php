<?php
$a = 1;
$b = 12;
$c = -13;

if($a == 0){
    echo "Não e equação de segundo grau.";
}else{
    $delta=((($b)**2)-(4*($a)*($c)));
    if($delta < 0){
        echo " Não existe raiz.";
    }else if($delta == 0){
        $x1= (-($b)+(sqrt($delta)))/(2*$a);
        echo "Raiz única: {$x1}";
    }else{
        $x1= (-($b)+(sqrt($delta)))/(2*$a);
        $x2= (-($b)-(sqrt($delta)))/(2*$a);
        echo "Há duas raizes reais:\n";
        echo "{$x1}\n";
        echo "{$x2}";
    }
}
?>