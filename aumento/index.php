<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
</head>
<body>
    <h1>Reajuste de preços</h1>

    <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">

       <label for="price">Insira o preço do produto:</label>
       <input type="number" id="price" min="1" name="price"><br><br>
       <label for="perc">Insira a porcentagem de aumento:(<strong><span id="p">?</span>%</strong>)</label>

       <input type="range"  name="perc" id="perc" min="0" max="100" step="1" oninput="changevalue()"><br><br>

       <input type="submit" value="Reajustar">

    </form>

    <h2>Reajuste:</h2>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $price=$_POST["price"];
            $perc=$_POST["perc"];
            $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $increase = $price + ($price*$perc/100);

            echo"O preço original de <strong>".numfmt_format_currency($pattern,$price,"BRL")."</strong> reais, com o aumento de <strong>$perc%</strong> se tornará <strong>".numfmt_format_currency($pattern,$increase,"BRL")."</strong> reais";

        }
    
    ?>

    <script>

        changevalue()

        function changevalue(){
            p.innerText=perc.value;
        }
        </script>
</body>
</html>