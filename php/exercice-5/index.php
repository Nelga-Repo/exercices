<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php 
        for ($i = 0, $j = 1; $i <= 5000; $j >= $i, print '<li>' . $i . '</li>', $i++);
    ?>
</body>
</html>