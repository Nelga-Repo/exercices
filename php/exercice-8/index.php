<?php
    $users =[
                [
                    'name' => 'Leroy',
                    'lastname' => 'Jenkins',
                    'city' => 'Bordeaux',
                    'visited' => ['france', 'Belgique', 'Afrique']
                ],
                [
                    'name' => 'Elfer',
                    'lastname' => 'Vessant',
                    'city' => 'Doliprane',
                    'visited' => ['france', 'Belgique', 'Afrique']
                ],
                [
                    'name' => 'Arold',
                    'lastname' => 'Schwarzenegger',
                    'city' => 'Paris',
                    'visited' => ['france', 'Belgique', 'Afrique']
                ],
                [
                    'name' => 'Shiurgie',
                    'lastname' => 'Esthetic',
                    'city' => 'Prunes-sur-marnes',
                    'visited' => ['france', 'Belgique', 'Afrique']
                ],
                [
                    'name' => 'Elai',
                    'lastname' => 'Phant',
                    'city' => 'Grenoble',
                    'visited' => ['france', 'Belgique', 'Afrique']
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
            echo "J'ai déjà visité : " . implode(', ', $line['visited']) . "<br>";
        }
    ?>
</body>
</html>