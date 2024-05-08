<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
</head>
<body>

    <?php

       $divid=$_POST["divid"] ?? 0;
       $divis=$_POST["divis"] ?? 1;

    ?>
    <h1>Anatomia de uma divisão</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

    <label for="divid">Dividendo</label><input type="number" name="divid" id="divid" value="<?=$divid?>" min="0"><br><br>
    <label for="divis">Divisor</label><input type="number" name="divis" id="divis" value="<?=$divis?>" min="1"><br><br>
     
    <input type="submit" value="Analisar">

    </form>

    <h2>Estrutura da divisão:</h2>

    <?php

       $quo=intdiv($divid,$divis);
       $resto=$divid%$divis;

       echo "<ul>";
       echo"<li>Dividendo:$divid</li><li>Divisor:$divis</li><li>Quociente:$quo</li><li>Resto:$resto</li>";

       echo"</ul>";

    ?>
</body>
</html>