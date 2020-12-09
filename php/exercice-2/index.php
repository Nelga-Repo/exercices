<?php 
    $name = 'Gérard';
    $color = "#c42d2d";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <style>
        body {
            background-color: <?php echo $color ?>; 
        }
    </style>
</head>
<body>
    <h1>Bienvenue <?php echo $name ?></h1>
</body>
</html>