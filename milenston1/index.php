<?php
//Snack 1
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
//Stampiamo a schermo tutte le partite con questo schema.
//Olimpia Milano - Cantù | 55-60

$games = [
    [
        "homeTeam" => "Mlano",
        "visitingTeam" => "Cantù",
        "homePoints" => 55,
        "guestPoints" => 60,
    ],
    [
        "homeTeam" => "Roma",
        "visitingTeam" => "Bologna",
        "homePoints" => 65,
        "guestPoints" => 75,
    ],
    [
        "homeTeam" => "Pesaro",
        "visitingTeam" => "Treviso",
        "homePoints" => 85,
        "guestPoints" => 70,
    ],
    [
        "homeTeam" => "Caserta",
        "visitingTeam" => "Venezia",
        "homePoints" => 57,
        "guestPoints" => 62,
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Risultatati giornata corrente</h1>
        <ul>
            <?php 
            // ciclo sull array $games
            for ($i=0; $i < count($games); $i++) { 

                // salvo il singolo incontro in una variabile
                $game = $games[$i];
                
            ?>
            <li><?php echo $game["homeTeam"] . " - " . $game["visitingTeam"] . " | " . $game["homePoints"] . " - " . $game["guestPoints"]?> </li>
            <?php } ?>
            
        </ul>
    </div>
    
</body>
</html>