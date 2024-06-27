<?php
$nota1 = 10;
$nota2 = 10;
$nota3 = 10;
$result = 0 ;
$peso1 = 1;
$peso2 = 1;
$peso3 = 2;
/*
Digite a primeira nota: <input type="text" name="nota1">;
Digite a segunda nota: <input type="text" name="nota2">;
Digite a terceira nota: <input type="text" name="nota3">;
*/
$result = ((($nota1*$peso1)+($nota2*$peso2)+($nota3*$peso3))/($peso1+$peso2+$peso3));
echo "A nota do aluno é: {$result} \n";//<br>
if ($result<7) {
    echo "Aluno Reprovado";
} else {
    echo"Aluno Aprovado";
}
?>