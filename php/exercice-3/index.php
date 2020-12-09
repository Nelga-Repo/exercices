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
    <h1>Exercice 3</h1>
    <?php 
        if ($admin) {
    ?>         <p>Admin</p> 
    <?php 
        } else {
    ?>         <p>Pas admin</p> 
    <?php
        }
    ?>
</body>
</html>