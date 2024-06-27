<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        nome:<input type="text" name="nome"><br>
        nota1:<input type="text" name="nota1">
        nota2:<input type="text" name="nota2">
        nota3:<input type="text" name="nota3">
        <input type="submit" value="enviar">
</form>

   
    
</body>
</html>
<?php
      function media($nota1,$nota2,$nota3){

        $med=($nota1+$nota2+$nota3)/3;

        return $med;
      }

      function situacao($med,$nome){

        if($med >= 7.0){

            echo "{$nome}Sua media foi de:{$med},Aprovado";

        }elseif($med >= 4.0 && $med <7){

            echo "{$nome}Sua media foi de:{$med},Recuperação";


        }else{
            echo "{$nome}Sua media foi de:{$med},Reprovado";

        }
      }

      $nome = $_GET['nome'];
      $nota1=$_GET['nota1'];
      $nota2=$_GET['nota2'];
      $nota3=$_GET['nota3'];
      $med=media($nota1,$nota2,$nota3);

      situacao($med,$nome);





?>