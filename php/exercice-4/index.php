<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php 
    
    echo '<ul>';
    for ($i = 0; $i <= 5000; $i++) {
        if ($i == 0) {
            
        } else if ($i >= 1) {
            echo "<li>$i</li>";
        }
    }
    echo '</ul>';

    ?>
</body>
</html>