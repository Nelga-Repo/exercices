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
    <style>
        .redStrong {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        echo 'Bienvenue ' .
        '<strong class=\'redStrong\'>' . $user['name'] . '</strong>' .
        ', votre année de naissance est ' . 
        '<strong class=\'redStrong\'>' . $user['year'] . '</strong>' .
        ', votre ville est ' .
        '<strong class=\'redStrong\'>' . $user['city'] . '</strong>' .
        ' et votre code postal est ' .
        '<strong class=\'redStrong\'>' . $user['postalCode'] . '</strong>';
    ?> 
</body>
</html>