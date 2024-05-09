<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de média aritmética e média ponderada</title>
</head>
<body>
    <h1>Cálculo de média aritmética e média ponderada</h1>

    <form method="POST" action="?=$_SERVER['PHP_SELF']?>">

    <label for="n1">Primeiro valor:</label>
    <input type="number" id="n1" name="n1"><br><br>
    <label for="p1">Primeiro peso:</label>
    <input type="number" id="p1" name="p1"><br><br>

    <label for="n2">Segundo valor:</label>
    <input type="number" id="n2" name="n2"><br><br>
    <label for="p2">Segundo peso:</label>
    <input type="number" id="p2" name="p2"><br><br>

    <input type="submit" value="Calcular">

    <?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){

       $n1=$_POST["n1"];
       $p1=$_POST["p1"];
       $n2=$_POST["n2"];
       $p2=$_POST["p2"];

       $mediaA = ($n1+$n2)/2;

       $mediaP = (($n1*$p1)+($n2*$p2))/($p2+$p1);

       echo "A média aritmética simples dos números <strong>$n1</strong> e <strong>$n2</strong> é:<strong>$mediaA</strong><br>";
       echo "A média aritmética ponderada dos valores com os pesos <strong>$p1</strong> e <strong>$p2</strong> é:<strong>$mediaP</strong>";

}
    ?>

</form>
</body>
</html>