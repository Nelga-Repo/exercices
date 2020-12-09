<?php 
    $admin = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php 
        if ($admin == true) {
            echo "Bienvenue admin " . '<a href="https://google.com">Lien admin</a>';
        } else {
            echo "Vous n'êtes pas admin $admin";
        }
    ?>

    <!-- OU -->

    <?php 
        if ($admin == true) {
            echo "Bienvenue admin ";
            echo "<br>";
            echo '<a href="https://google.com">Lien admin</a>';
        } else {
            echo "Vous n'êtes pas admin";
        }
    ?>
</body>
</html>