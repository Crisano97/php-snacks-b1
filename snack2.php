<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $nameLenght = strlen($name);
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
    <h1>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</h1>

    <?php 
        if ($nameLenght > 3 && strpos($email, '@') > 0 && strpos($email, '.') > 3 && is_numeric($age)){
            echo "ACCESSO RIUSCITO";
        } else {
            echo "ACCESSO NEGATO";
        };
    ?>
</body>
</html>