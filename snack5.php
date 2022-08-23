<?php 
    $students = [
        [
            'name' => 'Stefano',
            'surname' => 'Pioli',
            $studentVotes = [8, 6, 7, 8],
        ],
        [
            'name' => 'Luciano',
            'surname' => 'Spalletti',
            $studentVotes = [10, 8, 7, 6],
        ],
        [
            'name' => 'Antonio',
            'surname' => 'Conte',
            $studentVotes = [10, 9, 10, 8],
        ],
        [
            'name' => 'Maurizio',
            'surname' => 'Sarri',
            $studentVotes = [6, 5, 7, 8],
        ],
        [
            'name' => 'José',
            'surname' => 'Mouriho',
            $studentVotes = [9, 5, 7, 6],
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
</head>
<body>
    <h1>Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.</h1>


    <ul>
        <?php for($i = 0; $i < count($students); $i++) { ?>
        <li>
            <?php 
                echo $students[$i]['name'] . ' ' . $students[$i]['surname'] . ' ' . ' Scholastic average : ' . ' ' . array_sum($students[$i][0]) / count($students[$i][0]);
            ?>
        </li>
        <?php 
            }
        ?>
    </ul>
</body>
</html>