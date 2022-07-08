<?php
//Snack 4
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$numbers = [];

for ($i=0; $i < 15; $i++) { 
    
    $numeroCasuale = rand(1,15);

    if (in_array($numeroCasuale, $numbers)) {
        $i--;
    }else{
        $numbers [] += $numeroCasuale;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Stampo in html l array con numeri casuali tutti diversi</h2>
    <ul>
        <?php for ($i=0; $i < count($numbers); $i++) { 
            $number = $numbers[$i];
            ?> 
            <li> <?php echo $number?></li>   
        <?php } ?>
    </ul>
</body>
</html>