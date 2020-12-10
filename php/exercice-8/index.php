<?php
    $users =[
        [
            'name' => 'Leroy',
            'lastname' => 'Jenkins',
            'city' => 'Bordeaux'
        ],
        [
            'name' => 'Elfer',
            'lastname' => 'Vessant',
            'city' => 'Doliprane'
        ],
        [
            'name' => 'Arold',
            'lastname' => 'Schwarzenegger',
            'city' => 'Paris'
        ],
        [
            'name' => 'Shiurgie',
            'lastname' => 'Esthetic',
            'city' => 'Prunes-sur-marnes'
        ],
        [
            'name' => 'Elai',
            'lastname' => 'Phant',
            'city' => 'Grenoble'
        ]

        ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <?php
        foreach ($users as $line)
        {
            echo "Je suis " . $line['name'] . " et mon nom est " . $line['lastname'] . ". J'habite " . $line['city'] . '<br>';
        }
    ?>
</body>
</html>