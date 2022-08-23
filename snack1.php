<?php 
    $matches = [
        [
            "team1" => "Milano",
            "team2" => "Roma",
            "result1" => 50,
            "result2" => 90,
        ],
        [
            "team1" => "Torino",
            "team2" => "Venezia",
            "result1" => 40,
            "result2" => 80,
        ],
        [
            "team1" => "Napoli",
            "team2" => "Catanzaro",
            "result1" => 87,
            "result2" => 45,
        ],
        [
            "team1" => "Ancona",
            "team2" => "Termoli",
            "result1" => 33,
            "result2" => 87,
        ],
        [
            "team1" => "Lazio",
            "team2" => "Poggibonsi",
            "result1" => 3,
            "result2" => 90,
        ],
    ]
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
    
    <h1>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60</h1>

    <ul>
        <?php  for ($i = 0; $i < count($matches); $i++) {?>
        <li>
            <?php 
                echo $matches[$i]["team1"] . ' - ' . $matches[$i]["team2"] . ' - ' . $matches[$i]["result1"] . ' | ' . $matches[$i]["result2"];
            ?>
        </li>
        <?php 
            }
        ?>
    </ul>
    

    
</body>
</html>