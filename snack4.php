<?php 
    $paragraph = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente officia facere autem in deleniti dolorem nobis voluptates id quaerat voluptas dolores at, amet molestiae nihil quidem laborum, quibusdam, quasi dolore? ";
    $newParagraphs = explode('.', $paragraph);
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
    <h1>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo.</h1>

    <?php for ($i = 0; $i < count($newParagraphs) ; $i++){ ?>
        <p>
            <?php 
                echo $newParagraphs[$i];
            ?>
        </p>
    <?php 
        }
    ?>

</body>
</html>