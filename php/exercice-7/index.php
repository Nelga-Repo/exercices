<?php 
    $user = [
        'name' => 'Roger',
        'year' => '1998',
        'city' => 'Bordeaux', 
        'postalCode' => '33800'
    ]; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <?php 
        echo 'Bienvenue ' .
        '<strong style=\'color: red\'>' . $user['name'] . '</strong>' .
        ', votre année de naissance est ' . 
        '<strong style=\'color: red\'>' . $user['year'] . '</strong>' .
        ', votre ville est ' .
        '<strong style=\'color: red\'>' . $user['city'] . '</strong>' .
        ' et votre code postal est ' .
        '<strong style=\'color: red\'>' . $user['postalCode'] . '</strong>';
    ?> 
</body>
</html>