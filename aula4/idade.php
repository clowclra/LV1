<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        Digite seu nome: <input type="text" name="nome"><br>
        Digite sua idade: <input type="text" name="idade"><br>
        <input type="submit" value="enviar"><br>

    
    
</body>
</html>

<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];

if($idade > 18){
    echo"O {$nome} Maior de idade";
}else{
    echo "O {$nome} Menor de idade";
}





?>