<?php
$nome = $_POST["nome"];
$estadoCivil = $_POST["estadoCivil"];
 

  echo"\nSenhor ou Senhora {$nome}\n";
switch($estadoCivil){
    case '1':
        echo"<br>Você está Solteiro";
        break;
    case '2':
        echo"<br>Você está Casado";
        break; 
    case '3':
        echo"<br>Você está Divorciado"; 
        break;       
   case '4':
         echo"<br>Você está Viuvo";
         break;
    case '5':
         echo"<br>Você está União estavel";
         break;
    default:
         echo"<br>Opção invalida:";
    }                    
         

?>