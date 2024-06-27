<?php
      $senha=$_POST['senha'];
      $login=$_POST['login'];

      //echo "{$senha}";//debugar:se a informação ta passando de variavel
      //echo "{$login}";

      while(($senha !=123) && ($login !=="clara@gmail.com")){
        header('location: login.php');
      }

      echo "bem vindo ao sistema";






?>