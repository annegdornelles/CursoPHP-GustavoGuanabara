<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos anos você terá...</title>
</head>
<body>
    <h1>Calculando sua idade</h1>

    <form method="POST" action="?=$_SERVER['PHP_SELF']?">

    <label for="birth">Insira seu ano de nascimento:</label>
    <input type="number" min="1800" id="birth" name="birth"><br><br>

    <label for="year">Deseja saber sua idade no ano:</label>
    <input type="number" min="2000" id="year" name="year"><br><br>

    <input type="submit" value="Calcular">

    <h2>Resultado:</h2>

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
       $today = date("Y");
       $year=$_POST["year"] ?? $today;
       $birth=$_POST["birth"] ?? 1990;

       if ($year<$birth){
        echo "O ano que você pede não pode ser menor que seu ano de nascimento";
       }

       else{

       $age = $year - $birth;

       echo "A sua idade no ano <strong>$year</strong> será <strong>$age</strong> anos";
    }
}
    ?>
</body>
</html>