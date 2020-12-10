<?php
    $name = ['Alice', 'Louis', 'Kevin', 'Roger', 'Remi', 'Léa', 'Justine', 'Philippe', 'Marion', 'Marie', 'Marine'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <ul>
        <?php
            for ($i = 0; $i < 11; $i++) {
                echo '<li>' . $name[$i] . '</li>';
            }
        ?>
    </ul>
</body>
</html>