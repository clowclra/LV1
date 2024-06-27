<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Digite o nome: <input type="text" name="nome" id=""><br><br>
        Digite o peso: <input type="text" name="peso" id=""><br><br>
        Digite a altura: <input type="text" name="altura" id=""><br><br>
        <input type="submit" value="IMC"><br><br>
        
    
</body>
</html>

<?php 
$nome = $_GET["nome"];
$peso = $_GET["peso"];
$altura = $_GET["altura"];

$imc = $peso / $altura **2;

if ($imc < 16.9){
    echo"Muito abaixo do peso";
}else
if ($imc > 17 && $imc <= 18.4){
    echo "Abaixo do peso";
}else
if ($imc > 18.5 && $imc <= 24.9){
    echo "Peso normal";
}else
if ($imc > 25 && $imc <= 29.9){
    echo "Acima do peso";
}else
if ($imc > 30 && $imc <= 34.9){
    echo "Obesidade grau I";
}else
if ($imc > 35 && $imc <= 40){
    echo "Obesidade grau II";
}else{
    echo "Obesidade grau III";
}


?>