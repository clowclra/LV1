<?php
  //declaracao de variaveis
  $nome="Pedro";
  $numero;
  $salario=1000.50;
  $numeros=array (1,2,3, "marmota");
  $teste= true;
//impressao com interpolacao
  echo "O nome é:{$nome} e o salário é:{$salario}";
//impressao com concatenacao
  echo "\nNome: ".$nome."e o salário" .$salario. "\n";
  //impressao com var_dump()
  var_dump($nome);
   echo   '<pre>';
  print_r($numeros);
  var_dump($teste);
?>