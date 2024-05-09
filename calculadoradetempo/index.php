<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
</head>
<body>
    <h1>Calculadora de tempo</h1>

    <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
       
       <label for="sec">Total de segundos:</label>
       <input type="number" id="sec" name="sec"><br><br>

       <input type="submit" value="Calcular"><br><br>

    </form>

    <h2>Resultado</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){

            $sec = $_POST["sec"];
            $rest = $sec;
            $weeks = intdiv($sec,604800);

            $rest = $rest%604800;

            $days = intdiv($rest,86400);

            $rest = $rest%86400;

            $hours = intdiv($rest,3600);

            $rest = $rest%3600;

            $min = intdiv($rest,60);

            $rest = $rest % 60;

            $sec = $rest;


            echo "<ul>";

            echo "<li>$weeks semanas</li>";
            echo "<li>$days dias</li>";
            echo "<li>$hours horas</li>";
            echo "<li>$min minutos</li>";
            echo "<li>$sec segundos</li>";

            echo"</ul>";

        }

    ?>
</body>
</html>