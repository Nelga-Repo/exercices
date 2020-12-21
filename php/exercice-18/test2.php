<?php 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Problème de base de données : ' . $e->getMessage());
    }

    // Ne JAMAIS faire ça sinon la BDD est piratable... mettre une variable dans une response query est très dangereux
    // $response = $bdd->query("SELECT * FROM fruits WHERE color = '" . $_GET['color'] . "'");
    $response = $bdd->prepare("SELECT * FROM fruits WHERE color = ?");
    $response->execute([$_GET['color']]);

    $fruits = $response->fetchAll(PDO::FETCH_ASSOC);
    $response->closeCursor();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceci est un test</title>
</head>
<body>
        <?php 
            if (!empty($fruits)) {
                echo '<ul>';
                    foreach ($fruits as $allfruits) {
                        echo '<li>' . $allfruits['name'] . ' ' . $allfruits['color'] . '</li>';
                    }
                echo '</ul>';
            } else {
                echo 'Aucun fruits à afficher';
            }
        ?>
</body>
</html>