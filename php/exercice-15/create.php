<?php
    session_start();

    if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
        $error = 'Votre session existe déjà';
    } else {
        $_SESSION['firstname'] = 'Alice';
        $_SESSION['lastname'] = 'Dubois';
        $sucess = 'Votre session vient d\'être créé';
    };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Create</h1>
    <?php 
        if (isset($sucess)) {echo $sucess;} 
        if (isset($error)) {echo $error;};
    ?>
</body>
</html>