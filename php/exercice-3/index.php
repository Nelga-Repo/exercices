<!-- PHP VARIABLES -->

<?php 
    $admin = true;
?>

<!-- HTML PAGE -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <!-- CHECK ADMIN -->
    <?php 
        if ($admin) {
            echo "<p>Bienvenue admin</p>";
            echo '<a href="#">Lien admin</a>';
        } else {
            echo "Vous n'êtes pas admin";
        }
    ?>
</body>
</html>