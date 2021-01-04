<?php
    if (isset($_GET['search'])) {
        if(mb_strlen($_GET['search']) < 1 || mb_strlen($_GET['search']) > 50){
            $error = 'Erreur sur la recherche'; 
        }

        // Si pas d'erreurs
        if(!isset($error)) {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=fruits;charset=utf8', 'root', ''); // Modifiez pour utilisation
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Problème de base de données : ' . $e->getMessage());
            }

            $searchFruits = $bdd->prepare("SELECT * FROM fruits WHERE name LIKE ?");
            $searchFruits->execute([
                '%' . GET['search'] . '%'
            ]);

            $fruits = $searchFruits->fetchAll(PDO::FETCH_ASSOC);
            var_dump($fruits);
        }
    }
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
</head>
<body>
    <form action="">
        <input type="text" name="search" placeholder="Recherche">
        <input type="submit" value="Valider">
    </form>
</body>
</html>