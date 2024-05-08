<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes cúbica e quadrada de um número</title>
</head>
<body>

<h1>Raízes cúbica e quadrada de um número</h1>

    <form action="?=$_SERVER['PHP_SELF']?>" method="POST">
    <label for="num">Insira um número inteiro:</label><br><br>
    <input type="number" id="num" name="num" min="1">
    <input type="submit" value="Calcular">

    </form>

    <h2>Resultados:</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
          $num=$_POST["num"];
          $raizq = sqrt($num);
          $raizc = pow($num,1/3);

          echo "A raiz quadrada do número <strong>$num</strong> é:<strong>".number_format($raizq,2,",",".")."</strong><br>";
          echo "E sua raiz cúbica é:<strong>".number_format($raizc,2,",",".")."</strong>";

       }
    ?>


</body>
</html>