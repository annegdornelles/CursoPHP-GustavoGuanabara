<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
</head>
<body>
    <h1>Caixa eletrônico</h1>

    <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
       <label for="money">Insira o dinheiro que deseja retirar: </label>(temos disponíveis notas de R$100, R$50, R$10 e R$5);<br><br>
       <input type="number" id="money" name="money" step="5"><br><br>

       <input type="submit" value="Retirar">
    </form>

    <h2>Notas retiradas:</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
             
            $money = $_POST["money"] ?? 0;

            $rest = $money;

            $tot100 = intdiv ($rest,100);
            $rest %= 100;

            $tot50 = intdiv($rest,50);
            $rest %= 50;

            $tot10 = intdiv ($rest,10);
            $rest %=10;

            $tot5 = intdiv($rest,5);
            $rest %=5;

            echo "Saque de <strong>".number_format($money,2,",",".")."</strong> realizado";

            echo "<ul>";

            echo "<li>$tot100 notas de 100</li>";
            echo "<li>$tot50 notas de 50</li>";
            echo "<li>$tot10 notas de 10</li>";
            echo "<li>$tot5 notas de 5</li>";

            echo"</ul>";

        }

    ?>
</body>
</html>