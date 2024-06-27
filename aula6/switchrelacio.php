<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switchdados2.php" method="post">
     <input type="text" name="nome">
     <p>Estado Civil:</p>
     <select name="estadoCivil">
        <option value="0">Escolha uma opção</option>
        <option value="1">Solteiro</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viuvo</option>
        <option value="5">União estável</option>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>