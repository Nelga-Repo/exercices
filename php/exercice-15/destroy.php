<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Destroy</h1>
    <?php session_destroy(); ?>
</body>
</html>