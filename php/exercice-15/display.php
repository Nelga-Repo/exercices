<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Display</h1>
    <?php 
        if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
            echo 'Bienvenue ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
        } else {
            echo 'Merci de vous rendre sur la page <a href="create.php">create</a>';
        }
    ?>
</body>
</html>