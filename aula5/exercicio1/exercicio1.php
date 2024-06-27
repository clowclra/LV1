<?php 
$nota1 = 5;
$nota2 = 5;
$nota3 = 10;

$media = (($nota1 * 1) + ($nota2 * 1) + ($nota3 * 2))/4 ;
echo"A media do aluno e: {$media}";

if($media >= 7){
    echo"\nAluno aprovado";
}else
echo"\nAluno reprovado";

?>