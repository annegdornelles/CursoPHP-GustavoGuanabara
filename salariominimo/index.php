<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos salários mínimos seu salário equivale?</title>
</head>
<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $salario = $_POST["salario"];
        $sminimo = 1412;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>

    <h1>Quantos salários mínimos seu salário equivale?</h1>

    <form method="POST">

    <label for="salario">Insira seu salário:</label>
    <input type="number" id="salario" name="salario" step="0.001"><br><br>

    <input type="submit" value="Calcular">

    </form>
    <p>Considerando o salário mínimo de 7/5/24, que equivale a R$1.412 reais</p>

    <h2>Resultados:</h2>

    <?php
       $inteiro = intdiv($salario, $sminimo);
       $frac = $salario - $sminimo;

       echo "O salário de ".numfmt_format_currency($padrao, $salario, "BRL")." reais equivale a $inteiro salários mínimos";

       for ($i=0;$i<10;$i++){
       if ($salario % $sminimo !=$i){
          echo " e ".numfmt_format_currency($padrao, $frac, "BRL")." reais";
       }
    }
}
    
    ?>
</body>
</html>
