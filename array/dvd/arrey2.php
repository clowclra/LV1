<?php

  //matriz-array associativo

  $dados=array(

    array("nome" =>"joao","idade"=>10),
    array("nome"=> "Pedro","idade"=>20),
    array("nome"=> "Maria","idade"=>50),
    array("nome"=>"Lucas","idade"=>2),


  );
  foreach($dados as $d){
    echo "\nNome: ".$d ['nome']. "idade: ".$d['idade'];
  }




?>